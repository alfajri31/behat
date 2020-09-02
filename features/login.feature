Feature: login
    In dimaksudkan agar user bisa masuk sukses ke dalam website 

    Rules:

    - username telah terdaftar
    - password telah terdaftar

    Scenario: saya memasukan username dan password yang sudah terdaftar sebelumnya
        When saya memasukan username 'tester' dan password 'wtbandung20'
        Then saya menekan tombol submit
        Then saya bisa login
        And saya menemukan daftar jobs

