<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Home -->
        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == '') ? '' : 'collapsed' ?>" href="/">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li>

        <!-- Keranjang -->
        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'keranjang') ? '' : 'collapsed' ?>" href="keranjang">
                <i class="bi bi-cart-check"></i>
                <span>Keranjang</span>
            </a>
        </li>

        <?php if (session()->get('role') == 'admin'): ?>
            <!-- Produk -->
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'produk') ? '' : 'collapsed' ?>" href="produk">
                    <i class="bi bi-receipt"></i>
                    <span>Produk</span>
                </a>
            </li>

            <!-- Diskon -->
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'diskon') ? '' : 'collapsed' ?>" href="diskon">
                    <i class="bx bxs-discount"></i>
                    <span>Diskon</span>
                </a>
            </li>

            <!-- Kategori Produk -->
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'kategori') ? '' : 'collapsed' ?>" href="kategori">
                    <i class="bi bi-receipt"></i>
                    <span>Kategori Produk</span>
                </a>
            </li>

        <?php endif; ?>

        <!-- Profile -->
        <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'profile') ? '' : 'collapsed' ?>" href="profile">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
            
        <!-- FAQ -->
        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'faq') ? '' : 'collapsed' ?>" href="faq">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar -->
