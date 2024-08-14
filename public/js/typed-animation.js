// typeed animation
document.addEventListener('DOMContentLoaded', function () {
    const options = {
        strings: ["Halo, Saya Syechan Mochsin Al-thubaiti!"], // Teks yang akan diketik
        typeSpeed: 50, // Kecepatan mengetik
        backSpeed: 30, // Kecepatan menghapus
        backDelay: 1000, // Waktu tunggu sebelum menghapus
        startDelay: 500, // Waktu tunggu sebelum mulai mengetik
        loop: true, // Ulang animasi terus-menerus
        showCursor: false // Menyembunyikan kursor
    };

    new Typed('#typed-text', options);
});

