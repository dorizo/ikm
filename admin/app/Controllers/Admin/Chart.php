<?php

namespace App\Controllers\Admin;

use App\Models\Client_model;

class Chart extends BaseController
{
    // mainpage
    public function index()
    {
        checklogin();
        $m_client = new Client_model();
        $client   = $m_client->listing();
        $total    = $m_client->total();

        // Start validasi
       
        $data = ['title' => 'Data Chart: ' . $total['total'],
            'client'     => $client,
            'content'    => 'admin/chart/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }
    public function kat()
    {
        checklogin();
        $m_client = new Client_model();
        $client   = $m_client->listing();
        $total    = $m_client->total();

        // Start validasi
       
        $data = ['title' => 'Data Chart: ' . $total['total'],
            'client'     => $client,
            'content'    => 'admin/chart/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }
    public function witel()
    {
        checklogin();
        $m_client = new Client_model();
        $client   = $m_client->listing();
        $total    = $m_client->total();

        // Start validasi
       
        $data = ['title' => 'Data Chart: ' . $total['total'],
            'client'     => $client,
            'content'    => 'admin/chart/indexdomisili',
        ];
        echo view('admin/layout/wrapper', $data);
    }
    
    public function outstanding()
    {
        checklogin();
        $m_client = new Client_model();
        $client   = $m_client->listing();
        $total    = $m_client->total();

        // Start validasi
       
        $data = ['title' => 'Data Chart: ' . $total['total'],
            'client'     => $client,
            'content'    => 'admin/chart/index',
        ];
        echo view('admin/layout/wrapper', $data);
    }

    
}
