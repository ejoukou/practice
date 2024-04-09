<?php

namespace App\Http\Controllers;


use App\Models\Rows;


class RowsController extends BaseController
{
    public function __invoke()
    {
        $rows = $this->service->parse('data.txt');

        foreach ($rows as $row) {
            $this->service->update($row);
        }
        $rows = Rows::paginate(5);

        return view('rows', compact('rows'));
    }
}
