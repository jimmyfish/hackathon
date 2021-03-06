<?php

/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 31/03/16
 * Time: 10:24
 */

namespace Hackathon\pasar\Http\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Validator\Constraints as Assert;

class tambahProdukForm extends AbstractType
{

    private $kode;

    private $kodeLapak;

    private $namaProduk;

    private $merkId;

    private $satuan;

    private $harga;

    private $qty;

    private $deskripsi;

    private $createdAt;

    private $updatedAt;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'kode',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Masukkan Kode'],
                'label' => 'Kode'
            ]
        )->add(
            'kodeLapak',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Masukkan Kode Lapak'],
                'label' => 'Kode Lapak'
            ]
        )->add(
            'namaProduk',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Masukkan Nama Produk'],
                'label' => 'Nama Produk'
            ]
        )->add(
            'merkId',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Masukkan Merk ID'],
                'label' => 'Merk ID'
            ]
        )->add(
            'satuan',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Masukkan Satuan'],
                'label' => 'Satuan'
            ]
        )->add(
            'harga',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Masukkan Harga'],
                'label' => 'Harga Satuan'
            ]
        )->add(
            'qty',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Masukkan Quantity'],
                'label' => 'Quantity'
            ]
        )->add(
            'deskripsi',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Masukkan Deskripsi'],
                'label' => 'Deksripsi'
            ]
        )->add(
            'kirim',
            'submit',
            [
                'attr' => ['class' => 'btn btn-primary pull-right']
            ]
        );
    }

    public function getName()
    {
        return 'tambah_produk';
    }

    public function getKode()
    {
        return $this->kode;
    }

    public function setKode($kode)
    {
        $this->kode = $kode;
    }
    public function getKodeLapak()
    {
        return $this->kodeLapak;
    }

    public function setKodeLapak($kodeLapak)
    {
        $this->kodeLapak = $kodeLapak;
    }

    public function getNamaProduk()
    {
        return $this->namaProduk;
    }

    public function setNamaProduk($namaProduk)
    {
        $this->namaProduk = $namaProduk;
    }

    public function getMerkId()
    {
        return $this->merkId;
    }

    public function setMerkId($merkId)
    {
        $this->merkId = $merkId;
    }

    public function getSatuan()
    {
        return $this->satuan;
    }

    public function setSatuan($satuan)
    {
        $this->satuan = $satuan;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    public function getDeskripsi()
    {
        return $this->deskripsi;
    }

    public function setDeskripsi($deksripsi)
    {
        $this->deskripsi = $deksripsi;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

}