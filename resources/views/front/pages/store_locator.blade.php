@extends('master.front')
@section('content')

<div class="store_location">
    <div class="container-fluid py-4">
    <h4 class="mb-3">Find an Avijatry Store</h4>
    <div class="row">
        <!-- Left side -->
        <div class="col-md-4 mb-3">
        <!-- Search -->
        <div class="search-section">
            <input type="text" class="form-control" placeholder="Store Location">
            <button class="btn btn-dark">Find</button>
        </div>

        <!-- Dropdown filters -->
        <div class="filter-section d-flex mb-3">
            <select class="form-select me-2">
            <option>Sylhet</option>
            <option>Dhaka</option>
            <option>Chattogram</option>
            </select>
            <select class="form-select">
            <option>All Districts</option>
            <option>Habiganj</option>
            <option>Sreemangal</option>
            </select>
        </div>

        <!-- Store List -->
        <div class="store-list">
            <div class="store-item">
            <h6 class="fw-bold">Apex - Sri Sri Kalibari Committee, Habiganj</h6>
            <p class="mb-1 small">Shree Shree Kalibari Committee, Sadar Road, Hobigonj</p>
            <p class="mb-0 text-primary"><i class="bi bi-telephone"></i> 01774813563</p>
            </div>
            <div class="store-item">
            <h6 class="fw-bold">Apex - Sri Sri Kalibari Committee, Habiganj</h6>
            <p class="mb-1 small">Shree Shree Kalibari Committee, Sadar Road, Hobigonj</p>
            <p class="mb-0 text-primary"><i class="bi bi-telephone"></i> 01774813563</p>
            </div>
            <div class="store-item">
            <h6 class="fw-bold">Apex - Sri Sri Kalibari Committee, Habiganj</h6>
            <p class="mb-1 small">Shree Shree Kalibari Committee, Sadar Road, Hobigonj</p>
            <p class="mb-0 text-primary"><i class="bi bi-telephone"></i> 01774813563</p>
            </div>
            <div class="store-item">
            <h6 class="fw-bold">Apex - Sri Sri Kalibari Committee, Habiganj</h6>
            <p class="mb-1 small">Shree Shree Kalibari Committee, Sadar Road, Hobigonj</p>
            <p class="mb-0 text-primary"><i class="bi bi-telephone"></i> 01774813563</p>
            </div>
            <div class="store-item">
            <h6 class="fw-bold">Apex - Sri Sri Kalibari Committee, Habiganj</h6>
            <p class="mb-1 small">Shree Shree Kalibari Committee, Sadar Road, Hobigonj</p>
            <p class="mb-0 text-primary"><i class="bi bi-telephone"></i> 01774813563</p>
            </div>
            <div class="store-item">
            <h6 class="fw-bold">Apex - Sri Sri Kalibari Committee, Habiganj</h6>
            <p class="mb-1 small">Shree Shree Kalibari Committee, Sadar Road, Hobigonj</p>
            <p class="mb-0 text-primary"><i class="bi bi-telephone"></i> 01774813563</p>
            </div>
            <div class="store-item">
            <h6 class="fw-bold">Apex - Harun Plaza, Habiganj</h6>
            <p class="mb-1 small">Harun Plaza C/A, Sultanmamudpur, J.L No-17, Khatian No-5041</p>
            <p class="mb-0 text-primary"><i class="bi bi-telephone"></i> 01708506804</p>
            </div>
            <div class="store-item">
            <h6 class="fw-bold">Apex - Taraj Mansion, Sreemangal</h6>
            <p class="mb-1 small">Taraj Mansion, Sreemongol</p>
            <p class="mb-0 text-primary"><i class="bi bi-telephone"></i> 01732100000</p>
            </div>
        </div>
        </div>

        <!-- Right side (Map) -->
        <div class="col-md-8">
        <div class="map-container">
            <!-- Google Maps Embed -->
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.204882108035!2d91.88072231498524!3d24.89492998404771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552c9cdb8a5f%3A0x9c769b9e5f64c0a0!2sSylhet!5e0!3m2!1sen!2sbd!4v1694824427155!5m2!1sen!2sbd" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
            </iframe>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
