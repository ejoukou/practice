<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use App\Models\ParseJson;
use Illuminate\Support\Facades\Schema;


class UpdateJsonController extends Controller
{
    public function create(){
        $filename = 'data.txt';
        $rows = json_decode(Storage::get($filename),true);
        foreach($rows as $row){
            ParseJson::firstOrCreate(
                [
                    'id'=> $row['id'],
                ],
                [
                    'direction'=> $row['direction'],
                    'protocol'=> $row['protocol'],
                    'description'=> $row['description'],
                    'port_range_max'=> $row['port_range_max'],
                    'updated_at'=> $row['updated_at'],
                    'revision_number'=> $row['revision_number'],
                    'remote_group_id'=> $row['remote_group_id'],
                    'remote_ip_prefix'=> $row['remote_ip_prefix'],
                    'created_at'=> $row['created_at'],
                    'security_group_id'=> $row['security_group_id'],
                    'tenant_id'=> $row['tenant_id'],
                    'port_range_min'=> $row['port_range_min'],
                    'ethertype'=> $row['ethertype'],
                    'project_id'=> $row['project_id'],

                ]
                );
        }
        $rows = ParseJson::all();
        $attributes = Schema::getColumnListing((new ParseJson)->getTable());
        $ids = $rows->id;
        //dd($attributes);
        //dd($rows);
        dd($ids);
        return view('parsejson',compact('rows','attributes'));

    }
}
