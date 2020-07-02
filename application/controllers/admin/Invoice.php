<?php

class Invoice extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda belum login.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );

            redirect('auth/login');
        }
    }
    
    public function index()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_invoice)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates_admin/footer');
    }

    public function bayar($id_invoice)
    {
        $pesanan = $this->model_invoice->ambil_pesanan('tb_pesanan', $id_invoice);
        $data = array(
            'id_invoice'    => $pesanan->id_invoice,
            'total_terima'  => $pesanan->total,
            'tgl_bayar'     => date('Y-m-d H:m:s'),
            'metode_pembayaran' => 'cash'
        );

        $this->model_invoice->pembayaran('tb_pendapatan', $data);
        redirect('admin/invoice');
    }

    public function cancel($id_invoice)
    {
        $invoice = $this->model_invoice->detail($id_invoice);
        if ($invoice->status != 1) { ?>
                   <script type="text/javascript">
                        window.alert("Data tidak bisa dicancel lagi.");
                        location.href = '<?php echo base_url('admin/invoice') ?>';
                    </script>
        <?php
        } else {
            $data = array(
                'status'    => 3
            );
            $this->model_invoice->cancel($data, $id_invoice);
            redirect('admin/invoice');
        }
    }
}
