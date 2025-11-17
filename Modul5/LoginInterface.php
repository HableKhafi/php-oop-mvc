<?php

/**
 * Interface LoginInterface
 * Mendefinisikan kontrak bahwa kelas yang mengimplementasikannya
 * harus memiliki kemampuan login dan logout.
 */
interface LoginInterface
{
    // Semua metode di Interface harus bersifat public dan tidak memiliki implementasi (body)
    public function login();

    public function logout();
}