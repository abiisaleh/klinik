<?php
$title = 'Dashboard';
require_once "template/header.php" ?>

<div class="col-12 col-md-6">
    <div class="card">
        <div class="card-header">No Antrian</div>
        <div class="card-body">
            <div class="text-center">
                <h1 class="text-center" style="font-size: 5rem">08B</h1>
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
            <div class="text-center">
                <div class="avatar avatar-2xl">
                    <img src="https://zuramai.github.io/mazer/demo/assets/compiled/jpg/2.jpg" alt="Avatar">
                </div>
                <h3 class="mt-3">Muhamad abi saleh</h3>
                <p>Mahasiswa</p>
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
                            <th>Name</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
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

<?php require_once "template/footer.php" ?>