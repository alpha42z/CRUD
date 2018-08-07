<?php

namespace App\Services;
use App\Menu;

class MenuService
{

    public function getAll ()
    {
        return Menu::all();
    }

    public function create ($data)
    {
        $slug_pt = !isset($data['slug_pt']) ? $data['name'] : $data['slug_pt'];
        $slug_format_pt = strtolower(preg_replace('/--/', '-', preg_replace('/\s/', '-', $slug_pt)));
        $slug_en = !isset($data['slug_en']) ? $data['name'] : $data['slug_en'];
        $slug_format_en = strtolower(preg_replace('/--/', '-', preg_replace('/\s/', '-', $slug_en)));
        $slug_cn = !isset($data['slug_cn']) ? $data['name'] : $data['slug_cn'];
        $slug_format_cn = strtolower(preg_replace('/--/', '-', preg_replace('/\s/', '-', $slug_cn)));
        
        return Menu::create([
            'name' =>$data['name'],
            'slug_pt' =>$slug_format_pt,
            'slug_en' =>$slug_format_en,
            'slug_cn' =>$slug_format_cn
        ]);
    }

    public function getById ($id)
    {
        return Menu::find($id);
    }

    public function update ($data, $id)
    {
        $slug_pt = !isset($data['slug_pt']) ? $data['name'] : $data['slug_pt'];
        $slug_format_pt = strtolower(preg_replace('/--/', '-', preg_replace('/\s/', '-', $slug_pt)));
        $slug_en = !isset($data['slug_en']) ? $data['name'] : $data['slug_en'];
        $slug_format_en = strtolower(preg_replace('/--/', '-', preg_replace('/\s/', '-', $slug_en)));
        $slug_cn = !isset($data['slug_cn']) ? $data['name'] : $data['slug_cn'];
        $slug_format_cn = strtolower(preg_replace('/--/', '-', preg_replace('/\s/', '-', $slug_cn)));
        
        return Menu::where('id', $id)->update([
            'name' =>$data['name'],
            'slug_pt' =>$slug_format_pt,
            'slug_en' =>$slug_format_en,
            'slug_cn' =>$slug_format_cn,
        ]);
    }

    public function destroy ($id) 
    {
        return Menu::destroy($id);
    }
}