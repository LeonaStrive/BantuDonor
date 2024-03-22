<?= $this->extend('home/main');?>

<?= $this->section('content'); ?>

<?= $this->include('home/header'); ?>

<main>
    <section class="home" id="home">
        <div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover" data-src="https://plus.unsplash.com/premium_photo-1661769338046-e07bc03ff32a?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3Dl" uk-img>
            <div class="home-text uk-text-center uk-container uk-padding">
                <h1>Bantu Donor</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab veniam nulla nam voluptatibus, molestiae sequi aliquid incidunt illum, aliquam delectus facere dolorum ipsam voluptates, eius porro aut sed optio. Ab distinctio, aliquam reiciendis magni soluta dolores quod consectetur asperiores nobis nihil dolore eos hic a minus voluptate fuga tempora deleniti.</p>
            </div>
        </div>
    </section>

    <section class="tentang-kami uk-container uk-padding" id="tentang-kami">
        <div class="title uk-text-center">
            <h2>Tentang Kami</h2>
        </div>
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding" uk-grid>
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="https://plus.unsplash.com/premium_photo-1681966339824-77605e5d1a52?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" uk-cover>
                <canvas height="400"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Bantu Donor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt cum doloribus veritatis vitae cumque voluptas dolorem, rem sit modi maxime minima iusto eius unde, tempore optio provident, labore quae architecto adipisci natus? Repellat sunt cumque, repellendus molestiae deserunt ullam ducimus voluptatem quo praesentium molestias ad earum officiis vero nostrum. Temporibus nostrum unde similique corporis veniam eveniet sapiente odio nam quisquam.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="stok-darah uk-padding uk-container" id="stok-darah">
        <div class="title uk-text-center">
            <h2>Info Stok Darah</h2>
        </div>
        <div class="info-table uk-container uk-padding">
            <table class="uk-table uk-table-hover uk-table-divider uk-table-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Rumah Sakit</th>
                        <th>Alamat Rumah Sakit</th>
                        <th>Jumlah Stok</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>RSU Mitra Sehat</td>
                        <td>KM. 9, Jl. Wates 55295 Argomulyo Daerah Istimewa Yogyakarta</td>
                        <td>10</td>
                        <td>
                            <button class="uk-button uk-button-default" type="button" uk-toggle="target: #modal-detail">Lihat Detail</button>

                            <!-- This is the modal -->
                            <div id="modal-detail" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <h2 class="uk-modal-title">RSU Mitra Sehat</h2>
                                    <p>+622746498555</p>
                                    <table class="uk-table uk-table-divider uk-table-middle">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Golongan Darah</th>
                                                <th>Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>A</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>B</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>O</td>
                                                <td>2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="uk-text-right">
                                        <button class="uk-button uk-button-default uk-modal-close" type="button">Tutup</button>
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>RS PKU Muhammadiyah Gamping</td>
                        <td>Jalan Wates Km. 5 55294 Gamping Daerah Istimewa Yogyakarta</td>
                        <td>8</td>
                        <td>
                            <button class="uk-button uk-button-default" type="button" uk-toggle="target: #modal-detail1">Lihat Detail</button>

                            <!-- This is the modal -->
                            <div id="modal-detail1" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <h2 class="uk-modal-title">RS PKU Muhammadiyah Gamping</h2>
                                    <p>+622746499704</p>
                                    <table class="uk-table uk-table-divider uk-text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Golongan Darah</th>
                                                <th>Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>A</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>B</td>
                                                <td>3</td>
                                            </tr>
                                            <!-- <tr>
                                                <td>3</td>
                                                <td>O</td>
                                                <td>2</td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                    <p class="uk-text-right">
                                        <button class="uk-button uk-button-default uk-modal-close" type="button">Tutup</button>
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</main>
    
<?= $this->endSection() ;?>