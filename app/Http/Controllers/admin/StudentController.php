<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student\Student;
use App\Models\admin\Course;
use App\Models\admin\StudentRegFee;
use App\Models\center\Center;
use DB;
use Auth;
class StudentController extends Controller
{
	public function student_list()
	{
		$student['student'] = DB::table('student_login')
			->join('center_login', 'student_login.sl_FK_of_center_id', 'center_login.cl_id')
			->join('course', 'student_login.sl_FK_of_course_id', 'course.c_id')
			->get();
		return view('admin.student.index', $student);
	}

	public function add_student()
	{
		$center = Center::all();
		$course = Course::all();


		return view('admin.student.create', ['center' => $center, 'course' => $course]);
	}

	public function add_student_now(Request $request)
	{
		$student_reg_fee = StudentRegFee::first();
		$center = Center::where('cl_id', $request->center_id)->first();

		// Initialize variables (avoid undefined index error)
		$student_photo = null;
		$student_id_card = null;
		$student_educational_certificate = null;

		// Save Student Photo
		if ($request->hasFile('student_photo')) {
			$student_photo = $request->file('student_photo')->store('student', 'public');
		}

		// Save Student ID Card
		if ($request->hasFile('student_id_card')) {
			$student_id_card = $request->file('student_id_card')->store('student', 'public');
		}

		// Save Student Educational Certificate
		if ($request->hasFile('student_educational_certificate')) {
			$student_educational_certificate = $request->file('student_educational_certificate')->store('student', 'public');
		}

		// Prepare Data
		$data = [
			'sl_FK_of_course_id' => $request->course_id,
			'sl_FK_of_center_id' => $request->center_id,
			'sl_dob' => $request->date_of_birth,
			'sl_qualification' => $request->student_qualification,
			'sl_reg_no' => $request->student_roll,
			'sl_sex' => $request->student_sex,
			'sl_address' => $request->student_address,
			'sl_name' => $request->student_name,
			'sl_photo' => $student_photo,
			'sl_id_card' => $student_id_card,
			'sl_mother_name' => $request->student_mother,
			'sl_mobile_no' => $request->student_mobile,
			'password' => Hash::make($request->student_mobile),
			'sl_father_name' => $request->student_father,
			'sl_educational_certificate' => $student_educational_certificate,
			'sl_email' => $request->student_email,
			'sl_status' => 'PENDING',
		];

		// Insert Student
		$insert = Student::create($data);

		// Add Transaction
		DB::table('transaction')->insert([
			't_student_reg_no' => $insert->sl_reg_no,
			't_FK_of_center_id' => $request->center_id,
			't_amount' => $student_reg_fee->srf_amount
		]);

		// Update Wallet Balance
		Center::where('cl_id', $request->center_id)->update([
			'cl_wallet_balance' => $center->cl_wallet_balance - $student_reg_fee->srf_amount,
		]);

		return redirect()->route('student_list')->with('success', 'Student Registration Successfully!');
	}



	public function get_reg_no(Request $request)
	{
		$student_reg = Student::where('sl_FK_of_center_id', $request->center_id)->first();
		if ($student_reg):
			$data = [
				'msg' => 'Success',
				'reg_no' => $student_reg->sl_reg_no,
				'status' => 1
			];
		else:
			$data = [
				'msg' => 'Enter Center Code With 4 Digit Number',
				'status' => 0
			];
		endif;

		return response()->json($data);
	}

	public function edit_student()
	{

	}

	public function update_student()
	{

	}

	public function delete_student()
	{

	}

	public function student_status_updated(Request $request)
	{
		$student = Student::where('sl_id', $request->student_id)->update([
			'sl_status' => $request->status
		]);
		if ($student):
			$data = [
				'msg' => 'Student Status Updated Successfully!',
				'status' => 1
			];
		else:
			$data = [
				'msg' => 'Something Went Wrong!',
				'status' => 0
			];
		endif;

		return response()->json($data);
	}

	public function student_application($id)
	{
		$data = DB::table('student_login')
			->join('center_login', 'student_login.sl_FK_of_center_id', 'center_login.cl_id')
			->join('course', 'student_login.sl_FK_of_course_id', 'course.c_id')
			->where('student_login.sl_id', $id)
			->first();
		return view('admin.student.student_application', compact('data'));
	}

	public function set_reg_fee()
	{
		$student_reg_fee = StudentRegFee::first();
		return view('admin.set_reg_fee', compact('student_reg_fee'));
	}

	public function update_reg_fee(Request $request)
	{
		$student_reg_fee = StudentRegFee::first();

		$update = StudentRegFee::where('srf_id', $student_reg_fee->srf_id)->update([
			'srf_amount' => $request->amount

		]);

		return back()->with('success', 'Registration Fees Updated Successfully!');
	}

	// student result
	public function student_result_list()
	{

		$result['result'] = DB::table('set_result')
			->join('student_login', 'set_result.sr_FK_of_student_id', '=', 'student_login.sl_id')
			->join('center_login', 'set_result.sr_FK_of_center_id', '=', 'center_login.cl_id')
			->select(
				'set_result.*',
				'student_login.sl_name',
				'student_login.sl_id',
				'student_login.sl_email',
				'student_login.sl_reg_no',
				'center_login.cl_center_name as center_name',
				'center_login.cl_code as center_code'
			)
			->get();

		return view('admin.view_result', $result);
	}
}
