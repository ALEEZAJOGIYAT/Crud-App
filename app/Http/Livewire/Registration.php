<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Registration extends Component
{
    public $name;
    public $email;
    public $school;
    public $studentId;

    public $studentUpdate = false;

    public function render()
    {
        $data = Student::all();
        return view('livewire.student', compact('data', $data));
    }

    private function resetInput()
    {
        $this->name = '';
        $this->email = '';
        $this->school = '';
    }

    public function add()
    {
        Student::create([
            'name' => $this->name,
            'email' => $this->email,
            'school' => $this->school
        ]);

        $this->resetInput();
    }
    public function edit($id)
    {
        $this->studentUpdate = true;

        $editStu = Student::findOrFail($id);
        $this->studentId = $id;
        $this->name = $editStu->name;
        $this->email = $editStu->email;
        $this->school = $editStu->school;
    }

    public function update()
    {
        $post = Student::find($this->studentId);
        $post->update([
            'name' => $this->name,
            'email' => $this->email,
            'school' => $this->school
        ]);
        $this->studentUpdate = false;
        $this->resetInput();
    }

    public function delete($id)
    {
        // post::where('id',$id)->delete();

        Student::find($id)->delete();
    }
}
