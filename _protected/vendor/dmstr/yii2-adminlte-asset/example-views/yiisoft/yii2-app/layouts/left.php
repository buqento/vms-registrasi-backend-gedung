<aside class="main-sidebar">

    <section class="sidebar">


        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/site']],
                    ['label' => 'Pengunjung', 'icon' => 'share', 'url' => ['/userapp']],
                    ['label' => 'Kunjungan', 'icon' => 'share', 'url' => ['/visited']],
                    [
                        'label' => 'Master Data',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Tenant', 'icon' => 'circle-o', 'url' => ['/vmstenant']],
                            ['label' => 'Tipe Identitas', 'icon' => 'circle-o', 'url' => ['/vmstype']],
                            ['label' => 'Durasi Kunjungan', 'icon' => 'circle-o', 'url' => ['/vmslongvisit']],
                            ['label' => 'Karyawan', 'icon' => 'circle-o', 'url' => ['/employe']],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
