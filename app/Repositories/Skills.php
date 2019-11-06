<?php

namespace App\Repositories;

use App\Skill;
use Illuminate\Http\Request;


class Skills
{
	public function getSkills()
	{
		return Skill::all();
	}

	public function getSkill($id)
	{
		return Skill::where('id', $id)->firstOrFail();
	}

	public function storeSkill(Request $request)
	{
		$request['slug'] = str_slug($request->title);
		Skill::create($request->all());
	}

	public function destroySkill($id)
	{
		$skill = Skill::where('id', $id)->firstOrFail();
        $skill->delete();
        return $skill;
	}

	public function updateSkill(Request $request, $id)
	{
		$skill = Skill::where('id', $id)->firstOrFail();
        $skill->title = $request->title;
        $skill->slug = str_slug($request->title);
        $skill->status = $request->status;
        $skill->description = $request->description;
        $skill->save();
        return $skill;
	}
}
