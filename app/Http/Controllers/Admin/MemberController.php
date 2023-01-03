<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MemberFormRequest;
use App\Models\Pin;


class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('admin.member.index', compact('members'));
    }

    public function pins()
    {
        $pins = Pin::all();
        return view('admin.member.pins', compact('pins'));
    }

    public function create()
    {
        return view('admin.member.create');
    }

    public function createPin()
    {
        return view('admin.member.create-pin');
    }

    public function store(MemberFormRequest $request)
    {
        $data = $request->validated();
        $member = new Member;
        $member->branch =  $data['branch'];
        $member->full_name =  $data['full_name'];
        $member->email =  $data['email'];
        $member->phone =  $data['phone'];
        $member->age_bracket =  $data['age_bracket'];
        $member->gender =  $request['gender'];
        $member->home_address =  $request['home_address'];
        $member->next_of_kin=  $request['next_of_kin'];
        $member->qualification=  $request['qualification'];
        $member->occupation =  $data['occupation'];
        $member->employer =  $data['employer'];
        $member->ailment =  $data['ailment'];
        $member->pin =  $data['pin'];
        $member->save();
        $this->generateTagNumber($member);
        $this->generateGroup($member);

        return redirect('admin/member')->with('message', 'Member Added Successfully');
    }

    public function edit($member_id)
    {
        $member = Member::find($member_id);
        return view('admin.member.edit', compact('member'));
    }

    public function update(MemberFormRequest $request, $member_id)
    {
        $data = $request->validated();

        $member = Member::find($member_id);
        $member->branch =  $data['branch'];
        $member->full_name =  $data['full_ame'];
        $member->email =  $data['email'];
        $member->phone =  $data['phone'];
        $member->age_bracket =  $data['age_bracket'];
        $member->gender =  $request['gender'];
        $member->home_address =  $request['home_address'];
        $member->next_of_kin =  $request['next_of_kin'];
        $member->qualification=  $request['qualification'];
        $member->occupation=  $data['occupation'];
        $member->employer=  $data['employer'];
        $member->ailment=  $data['ailment'];
        $member->payment_mode=  $data['payment_mode'];
        $member->update();

        return redirect('admin/member')->with('message', 'Member Updated Successfully');
    }

    public function destroy($member_id)
    {
        $member= Member::find($member_id);
        if($member)
        {
            $member->delete();
            return redirect('admin/member')->with('message', 'Member Deleted Successfully');
        }
        else
        {
            return redirect('admin/member')->with('message', 'No Member Id Found');
        }
    }

    public function generateTagNumber($member)
    {
        $member_id = strval($member->id);
        $id_length = strlen($member_id);
        if($id_length == 1){
            $tag_number = '00'. $member_id;
        }
        else if($id_length == 2){
            $tag_number = '0'. $member_id;
        }
        else {
            $tag_number = $member_id;
        }
        
        $member->tag_number = $tag_number;
        $member->save();
    }

    public function generateGroup($member)
    {
        $member_id = ($member->id);
        $group = $member_id % 4;

        if($group == 0){
         $group = 4;
    }
        $member->group = $group;
        $member->save();
    }
}
