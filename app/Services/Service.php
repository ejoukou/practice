<?php
namespace App\Services;
use Illuminate\Support\Facades\Storage;
use App\Models\Rows;

class Service{
    public function parse(String $filename){

        $rows = json_decode(Storage::get($filename), true);
        return $rows;
}
    public function update(Array $row){
            $ipRange = $row['direction'] == 'egress' ? $row['remote_ip_prefix'] : $row['remote_group_id'];
            $portRange = strval($row['port_range_min']) . ':' . strval($row['port_range_max']);

            Rows::firstOrCreate(
                [
                    'id' => $row['id'],
                ],
                [
                    'direction' => $row['direction'],
                    'protocol' => $row['protocol'],
                    'description' => $row['description'],
                    'port_range_max' => $row['port_range_max'],
                    'updated_at' => $row['updated_at'],
                    'revision_number' => $row['revision_number'],
                    'remote_group_id' => $row['remote_group_id'],
                    'remote_ip_prefix' => $row['remote_ip_prefix'],
                    'created_at' => $row['created_at'],
                    'security_group_id' => $row['security_group_id'],
                    'tenant_id' => $row['tenant_id'],
                    'port_range_min' => $row['port_range_min'],
                    'ethertype' => $row['ethertype'],
                    'project_id' => $row['project_id'],
                    'port_range' => $portRange,
                    'ip_range' => $ipRange,

                ]
            );
    }
}
