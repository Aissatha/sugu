<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('vendor.dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <i class="ti ti-store"></i>
            </span>
            <span class="app-brand-text menu-text fw-bold">Ma Boutique</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item">
            <a href="{{ route('vendor.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-home"></i>
                <div>Tableau de bord</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('vendor.products.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-package"></i>
                <div>Produits</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('vendor.products.create') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-plus"></i>
                <div>Ajouter un produit</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('vendor.products.stock') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-archive"></i>
                <div>Stock</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('vendor.shops.create') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-building-store"></i>
                <div>Ma boutique</div>
            </a>
        </li>
    </ul>
</aside>
