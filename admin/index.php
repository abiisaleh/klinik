<?php


session_start();

if (!isset($_SESSION['login']))
    header('Location: /admin/login.php');

$title = 'Dashboard';
include("template/header.php");
?>

<div class="col-12 col-md-6">
    <div class="card">
        <div class="card-header">No Antrian</div>
        <div class="card-body">
            <div class="text-center">
                <h1 class="text-center" style="font-size: 5rem">11B</h1>
                <p>/ 20 pasien</p>
            </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary btn-block mb-2" href="/">Next</a>
            <a class="btn btn-secondary btn-block mb-2" href="/">Reset</a>
        </div>
    </div>
</div>

<div class="col-12 col-md-6">
    <div class="card">
        <div class="card-header">Info Pasien</div>
        <div class="card-body">
            <div class="text-center px-4">
                <!-- <div class="avatar avatar-2xl">
                    <img src="https://zuramai.github.io/mazer/demo/assets/compiled/jpg/2.jpg" alt="Avatar">
                </div> -->
                <h3 class="mt-3">Muhamad abi saleh</h3>
                <p>Mahasiswa</p>
                <p class="mt-4 fst-italic">"saya pusing, kenapa uang saya terlalu banyak. kan bingung mau beli apa nanti"</p>
                <textarea class="form-control" name="diagnosa" id="diagnosa" cols="30" rows="10"></textarea>
            </div>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4>Daftar Antrian</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-lg">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Keluhan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12B</td>
                            <td class="col-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        <img src="https://zuramai.github.io/mazer/demo/assets/compiled/jpg/5.jpg">
                                    </div>
                                    <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">Congratulations on your graduation!</p>
                            </td>
                        </tr>
                        <tr>
                            <td>13B</td>
                            <td class="col-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        <img src="https://zuramai.github.io/mazer/demo/assets/compiled/jpg/2.jpg">
                                    </div>
                                    <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">Wow amazing design! Can you make another tutorial for
                                    this design?</p>
                            </td>
                        </tr>
                        <tr>
                            <td>14B</td>
                            <td class="col-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        <img src="https://zuramai.github.io/mazer/demo/assets/compiled/jpg/8.jpg">
                                    </div>
                                    <p class="font-bold ms-3 mb-0">Singh Eknoor</p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">What a stunning design! You are so talented and creative!</p>
                            </td>
                        </tr>
                        <tr>
                            <td>15B</td>
                            <td class="col-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        <img src="https://zuramai.github.io/mazer/demo/assets/compiled/jpg/3.jpg">
                                    </div>
                                    <p class="font-bold ms-3 mb-0">Rani Jhadav</p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">I love your design! It’s so beautiful and unique! How did you learn to do this?</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include "template/footer.php" ?>