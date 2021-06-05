<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('./application/third_party/excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller {


	  public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Export_model');              
        
    }

    public function index()
	{

		$assets = $this->Export_model->exportAssets('tb_daftar_barang')->result();


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
		$data_ac = $this->Export_model->exportDataAc('tb_ac')->result();

		$object = new Spreadsheet;

          $object->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'No.Ac')
                      ->setCellValue('C1', 'Wing')
                      ->setCellValue('D1', 'Lantai')
                      ->setCellValue('E1', 'Ruangan')
                      ->setCellValue('F1', 'Merk')
                      ->setCellValue('G1', 'Model')
                      ->setCellValue('H1', 'Jenis')
                      ->setCellValue('I1', 'Tanggal pemasangan')
                      ->setCellValue('J1', 'Kapasitas')
                      ->setCellValue('K1', 'Amper')
                      ->setCellValue('L1', 'Tegangan')
                      ->setCellValue('M1', 'Btu')
                      ->setCellValue('N1', 'Refrigerant')
                      ->setCellValue('O1', 'Product')
                      ->setCellValue('P1', 'Status')
                      ->setCellValue('Q1', 'Status kompresor')
                      ->setCellValue('R1', 'Jadwal maintenance')
                      ->setCellValue('S1', 'Keterangan');

          $kolom = 2;
          $nomor = 1;
          foreach($data_ac as $ac) {

               $object->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $ac->label)
                           ->setCellValue('C' . $kolom, $ac->wing)
                           ->setCellValue('D' . $kolom, $ac->lantai)
                           ->setCellValue('E' . $kolom, $ac->ruangan)
                           ->setCellValue('F' . $kolom, $ac->merk)
                           ->setCellValue('G' . $kolom, $ac->model)
                           ->setCellValue('H' . $kolom, $ac->jenis)
                           ->setCellValue('I' . $kolom, $ac->tgl_pemasangan)
                           ->setCellValue('J' . $kolom, $ac->kapasitas)
                           ->setCellValue('K' . $kolom, $ac->arus)
                           ->setCellValue('L' . $kolom, $ac->phasa)
                           ->setCellValue('M' . $kolom, $ac->btu)
                           ->setCellValue('N' . $kolom, $ac->refrigerant)
                           ->setCellValue('O' . $kolom, $ac->product)
                           ->setCellValue('P' . $kolom, $ac->status)
                           ->setCellValue('Q' . $kolom, $ac->status_kompresor)
                           ->setCellValue('R' . $kolom, $ac->tgl_maintenance)
                           ->setCellValue('S' . $kolom, $ac->jenis_kerusakan);

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
    $apart = $this->Export_model->exportDataApart('tb_apart')->result();



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
	
}
