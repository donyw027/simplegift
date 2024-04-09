<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

    
 

        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        
        

        $data['title'] = "Dashboard";

        


        $role = $this->session->userdata('login_session')['role'];


        $bulan=date('m');
        $tahun=date('Y');
        $hari=date('d');

        $saldo = $this->db->query("SELECT SUM(saldo) as total_saldo FROM saldo")->row()->total_saldo;


        $queri_pemasukan_bulanan = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan WHERE MONTH(tgl) = $bulan AND YEAR(tgl)=$tahun");
        $data['pemasukan_bulanan'] = $saldo + $queri_pemasukan_bulanan->row()->total_bulan;
        
        $queri_pengeluaran_bulanan = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran WHERE MONTH(tgl) = $bulan AND YEAR(tgl)=$tahun");
        $data['pengeluaran_bulanan'] = $queri_pengeluaran_bulanan->row()->total_bulan;

        $data['Labarugi_bulanan']= $saldo + $data['pemasukan_bulanan'] - $data['pengeluaran_bulanan'];
    

        $query_total_pemasukan = $this->db->query("SELECT SUM(jumlah_pemasukan) as total_bulan FROM pemasukan");
        $data['total_pemasukan'] =  $saldo + $query_total_pemasukan->row()->total_bulan;

        $query_total_pengeluaran = $this->db->query("SELECT SUM(jumlah_pengeluaran) as total_bulan FROM pengeluaran");
        $data['total_pengeluaran'] = $query_total_pengeluaran->row()->total_bulan;

        $data['Labarugi_total']= $saldo + $data['total_pemasukan'] - $data['total_pengeluaran'];

        
      
        $data['stok'] = $this->admin->count('stok');
        $data['order'] = $this->admin->count('order');


        $this->template->load('templates/dashboard', 'dashboard', $data);
    }
}
