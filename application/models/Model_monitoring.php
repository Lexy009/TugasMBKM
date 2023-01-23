<?php


class Model_monitoring extends CI_Model {

    public function getAllMonitoring() 
    {
        return $this->db->get('project_mentoring')->result_array();
    }

    public function tambahDataMonitoring()
    {

        $data = [
            "id_mentoring" => $this->input->post('id_mentoring',true),
            "Nama_project" => $this->input->post('Nama_project', true),
            "Client" => $this->input->post('Client', true),
            "Project_Leader" => $this->input->post('Project_Leader', true),
            "Tanggal_dimulai" => $this->input->post('Tanggal_dimulai', true),
            "Tanggal_selesai" => $this->input->post('Tanggal_selesai', true),
            "Proses" => $this->input->post('Proses', true)

        ];

        $this->db->insert('project_mentoring', $data);
    }

    public function hapusDataMonitoring($id)

    {
        $this->db->where('id_mentoring', $id);
        $this->db->delete('project_mentoring');
    }

    public function getMonitorinById($id)
    {
        return $this->db->get_where('project_mentoring', ['id_mentoring' => $id])->row_array();
    }

    public function ubahDataMonitoring()
    {

        $data = [
            "id_mentoring" => $this->input->post('id_mentoring',true),
            "Nama_project" => $this->input->post('Nama_project', true),
            "Client" => $this->input->post('Client', true),
            "Project_Leader" => $this->input->post('Project_Leader', true),
            "Tanggal_dimulai" => $this->input->post('Tanggal_dimulai', true),
            "Tanggal_selesai" => $this->input->post('Tanggal_selesai', true),
            "Proses" => $this->input->post('Proses', true)

        ];

        $this->db->where('id_mentoring', $this->input->post('id_mentoring'));
        $this->db->update('project_mentoring', $data);
    }
}
?>