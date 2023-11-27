{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Categories" icon="la la-question" :link="backpack_url('categorie')" />
<x-backpack::menu-item title="Commandes" icon="la la-question" :link="backpack_url('commande')" />
<x-backpack::menu-item title="Commentaires" icon="la la-question" :link="backpack_url('commentaire')" />
<x-backpack::menu-item title="Produits" icon="la la-question" :link="backpack_url('produit')" />
<x-backpack::menu-item title="Rendezvous" icon="la la-question" :link="backpack_url('rendezvou')" />
<x-backpack::menu-item title="Stylistes" icon="la la-question" :link="backpack_url('styliste')" />
<x-backpack::menu-item title="Rolenames" icon="la la-question" :link="backpack_url('rolename')" />