<?php

class Project {
    public function getAll() {
        return [
            [
                "name" => "CRUD Mahasiswa",
                "desc" => "Aplikasi untuk mengelola data mahasiswa dengan fitur tambah, edit, dan hapus.",
                "tech" => "PHP + MySQL",
                "image" => "assets/img/project1.jpg",
                "link" => "#"
            ],
            [
                "name" => "Website Portfolio",
                "desc" => "Website portfolio modern menggunakan Tailwind CSS.",
                "tech" => "HTML, Tailwind CSS",
                "image" => "assets/img/project2.jpg",
                "link" => "#"
            ],
            [
                "name" => "Sistem Login",
                "desc" => "Sistem autentikasi user dengan login dan register.",
                "tech" => "PHP Native",
                "image" => "assets/img/project3.jpg",
                "link" => "#"
            ]
        ];
    }
}