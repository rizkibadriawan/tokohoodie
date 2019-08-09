<!--sidebar-menu-->
<div id="sidebar">
    <ul>
             <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Kategori</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Tambah Kategori</a></li>
                <li><a href="{{route('category.index')}}">Daftar Kategori</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Produk</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Tambah Produk</a></li>
                <li><a href="{{route('product.index')}}">Daftar Produk</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->