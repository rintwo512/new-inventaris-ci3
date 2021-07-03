<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('./application/third_party/excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller {


	  public function __construct()
    {
        parent::__construct();                            
    }

    public function index()
	{

    $assets = $this->db->get('tb_daftar_barang')->result();


		$spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'Nama Barang')
                      ->setCellValue('C1', 'Merk')
                      ->setCellValue('D1', 'Tanggal pengadaan')
                      ->setCellValue('E1', 'Daya')
                      ->setCellValue('F1', 'Berat')
                      ->setCellValue('G1', 'Status');

          $kolom = 2;
          $nomor = 1;
          foreach($assets as $aset) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $aset->nama_barang)
                           ->setCellValue('C' . $kolom, $aset->merk)
                           ->setCellValue('D' . $kolom, $aset->tgl_pengadaan)
                           ->setCellValue('E' . $kolom, $aset->daya)
                           ->setCellValue('F' . $kolom, $aset->berat)
                           ->setCellValue('G' . $kolom, $aset->status);

               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($spreadsheet);

          header('Content-Type: application/vnd.ms-excel');
	  header('Content-Disposition: attachment;filename="Asset ME.xlsx"');
	  header('Cache-Control: max-age=0');

	  $writer->save('php://output');
	  exit;

	}


    public function data_ac()
	{
		$data_ac = $this->db->get('tb_ac')->result();
    // $data_ac = $this->Export_model->exportDataAc('tb_ac')->result();

		$object = new Spreadsheet;

          $object->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'Label')
                      ->setCellValue('C1', 'Aset')
                      ->setCellValue('D1', 'Wing')
                      ->setCellValue('E1', 'Lantai')
                      ->setCellValue('F1', 'Ruangan')
                      ->setCellValue('G1', 'Merk')
                      ->setCellValue('H1', 'Model')
                      ->setCellValue('I1', 'Jenis')
                      ->setCellValue('J1', 'Tanggal pemasangan')
                      ->setCellValue('K1', 'Kapasitas')
                      ->setCellValue('L1', 'Amper')
                      ->setCellValue('M1', 'Tegangan')
                      ->setCellValue('N1', 'Btu')
                      ->setCellValue('O1', 'Refrigerant')
                      ->setCellValue('P1', 'Product')
                      ->setCellValue('Q1', 'Status')
                      ->setCellValue('R1', 'Status kompresor')
                      ->setCellValue('S1', 'Jadwal maintenance')
                      ->setCellValue('T1', 'Keterangan');

          $kolom = 2;
          $nomor = 1;
          foreach($data_ac as $ac) {

               $object->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $ac->label)
                           ->setCellValue('C' . $kolom, $ac->aset)
                           ->setCellValue('D' . $kolom, $ac->wing)
                           ->setCellValue('E' . $kolom, $ac->lantai)
                           ->setCellValue('F' . $kolom, $ac->ruangan)
                           ->setCellValue('G' . $kolom, $ac->merk)
                           ->setCellValue('H' . $kolom, $ac->model)
                           ->setCellValue('I' . $kolom, $ac->jenis)
                           ->setCellValue('J' . $kolom, $ac->tgl_pemasangan)
                           ->setCellValue('K' . $kolom, $ac->kapasitas)
                           ->setCellValue('L' . $kolom, $ac->arus)
                           ->setCellValue('M' . $kolom, $ac->phasa)
                           ->setCellValue('N' . $kolom, $ac->btu)
                           ->setCellValue('O' . $kolom, $ac->refrigerant)
                           ->setCellValue('P' . $kolom, $ac->product)
                           ->setCellValue('Q' . $kolom, $ac->status)
                           ->setCellValue('R' . $kolom, $ac->status_kompresor)
                           ->setCellValue('S' . $kolom, $ac->tgl_maintenance)
                           ->setCellValue('T' . $kolom, $ac->jenis_kerusakan);

               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($object);

          header('Content-Type: application/vnd.ms-excel');
	  header('Content-Disposition: attachment;filename="Data Ac Tireg7.xlsx"');
	  header('Cache-Control: max-age=0');

	  $writer->save('php://output');
	  exit;
	}

  public function dataApart()
  {
    $apart = $this->db->get('tb_apart')->result();



    $apr = new Spreadsheet;

          $apr->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'No.Apart')
                      ->setCellValue('C1', 'Wing')
                      ->setCellValue('D1', 'Lantai')
                      ->setCellValue('E1', 'Lokasi')
                      ->setCellValue('F1', 'Merk')
                      ->setCellValue('G1', 'Jenis')
                      ->setCellValue('H1', 'Berat')
                      ->setCellValue('I1', 'Tanggal expired')
                      ->setCellValue('J1', 'Tanggal pengadaan')
                      ->setCellValue('K1', 'Status')
                      ->setCellValue('L1', 'Keterangan');

          $kolom = 2;
          $nomor = 1;
          foreach($apart as $apar) {

               $apr->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $apar->no_apart)
                           ->setCellValue('C' . $kolom, $apar->wing)
                           ->setCellValue('D' . $kolom, $apar->lantai)
                           ->setCellValue('E' . $kolom, $apar->lokasi)
                           ->setCellValue('F' . $kolom, $apar->merk)
                           ->setCellValue('G' . $kolom, $apar->jenis)
                           ->setCellValue('H' . $kolom, $apar->berat)
                           ->setCellValue('I' . $kolom, $apar->tgl_expired)
                           ->setCellValue('J' . $kolom, $apar->tgl_pengadaan)
                           ->setCellValue('K' . $kolom, $apar->status)
                           ->setCellValue('L' . $kolom, $apar->catatan);

               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($apr);

         header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Data apar.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    exit;
  }

  public function dataCctv()
  {
    $cctv = $this->db->get('tb_cctv')->result();




    $object = new Spreadsheet;

          $object->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'No.Camera')
                      ->setCellValue('C1', 'Wing')
                      ->setCellValue('D1', 'Lantai')
                      ->setCellValue('E1', 'Lokasi')
                      ->setCellValue('F1', 'Merk')
                      ->setCellValue('G1', 'Jenis')
                      ->setCellValue('H1', 'Sensor gambar')
                      ->setCellValue('I1', 'Tanggal pengadaan')
                      ->setCellValue('J1', 'Status')
                      ->setCellValue('K1', 'Keterangan');

          $kolom = 2;
          $nomor = 1;
          foreach($cctv as $cam) {

               $object->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $cam->no_camera)
                           ->setCellValue('C' . $kolom, $cam->wing)
                           ->setCellValue('D' . $kolom, $cam->lantai)
                           ->setCellValue('E' . $kolom, $cam->lokasi)
                           ->setCellValue('F' . $kolom, $cam->merk)
                           ->setCellValue('G' . $kolom, $cam->jenis)
                           ->setCellValue('H' . $kolom, $cam->sensor_gambar)
                           ->setCellValue('I' . $kolom, $cam->tgl_pengadaan)
                           ->setCellValue('J' . $kolom, $cam->status)
                           ->setCellValue('K' . $kolom, $cam->catatan);
               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($object);

         header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Data CCTV.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    exit;
  }

  public function dataElektronik()
  {
     $elektronik = $this->db->get('tb_elektronik')->result();




    $object = new Spreadsheet;

          $object->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'Aset')
                      ->setCellValue('C1', 'Nama Perangkat')
                      ->setCellValue('D1', 'Merk')
                      ->setCellValue('E1', 'Wing')
                      ->setCellValue('F1', 'Lantai')
                      ->setCellValue('G1', 'Lokasi')
                      ->setCellValue('H1', 'Tegangan')
                      ->setCellValue('I1', 'Watt/Amper')
                      ->setCellValue('J1', 'Keterangan');

          $kolom = 2;
          $nomor = 1;
          foreach($elektronik as $el) {

               $object->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $el->aset)
                           ->setCellValue('C' . $kolom, $el->nama)
                           ->setCellValue('D' . $kolom, $el->merk)
                           ->setCellValue('E' . $kolom, $el->wing)
                           ->setCellValue('F' . $kolom, $el->lantai)
                           ->setCellValue('G' . $kolom, $el->lokasi)
                           ->setCellValue('H' . $kolom, $el->tegangan)
                           ->setCellValue('I' . $kolom, $el->watt)
                           ->setCellValue('J' . $kolom, $el->catatan);
               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($object);

         header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Data Perangkat Elektronik.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    exit;
  }
	
}
