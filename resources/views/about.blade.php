@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<div class="about-wrapper">

    {{-- Back Button --}}
    <a href="{{ route('products.index') }}" class="back-btn">
        <span class="material-icons-round">arrow_back</span>
        Back to Products
    </a>

    {{-- Header --}}
    <div class="about-header">
        <div class="about-logo">
            <span class="material-icons-round logo-icon">inventory_2</span>
        </div>
        <div class="about-header-text">
            <h1>PRODUCT<span style="margin-left: 0.3rem;">HUB</span></h1>
            <p class="about-subtitle">Course Project &mdash; Laravel Web Application Development (CRUD) &middot; PSIT01-4C &middot; 2025–2026, 2nd Sem</p>
        </div>
    </div>

    {{-- Project Overview --}}
    <div class="section-block">
        <div class="section-title">
            <span class="material-icons-round section-icon">info</span>
            Project Overview
        </div>
        <div class="overview-box">
            <p>
                ProductHub is a web-based laptop inventory management application built using the <strong>Laravel Framework</strong>.
                It demonstrates the <strong>MVC (Model-View-Controller)</strong> architecture by implementing full CRUD functionality —
                allowing users to Create, Read, Update, and Delete product records within a database.
                The project uses <strong>Bootstrap 5</strong> for a clean and responsive UI design.
            </p>
        </div>
    </div>

    {{-- Team Members --}}
    <div class="section-block">
        <div class="section-title">
            <span class="material-icons-round section-icon">group</span>
            Team Members
        </div>
        <div class="team-grid">
            <div class="member-card">
                <div class="member-avatar"><img src="{{ asset('assets/jan.jpg') }}"></div>
                <div class="member-name">Jan Laurence Tan</div>
                <div class="member-role">
                    <span class="material-icons-round role-icon">code</span>
                    Lead Developer
                </div>
            </div>
            <div class="member-card">
                <div class="member-avatar"><img src="{{ asset('assets/dreng.jpg') }}"></div>
                <div class="member-name">Andrea Aurelio</div>
                <div class="member-role">
                    <span class="material-icons-round role-icon">brush</span>
                    UI/UX Designer
                </div>
            </div>
            <div class="member-card">
                <div class="member-avatar">JM</div>
                <div class="member-name">John Michael Tombocon</div>
                <div class="member-role">
                    <span class="material-icons-round role-icon">storage</span>
                    Database Administrator
                </div>
            </div>
        </div>
    </div>

    {{-- Tech Stack --}}
    <div class="section-block">
        <div class="section-title">
            <span class="material-icons-round section-icon">layers</span>
            Tech Stack
        </div>
        <div class="tech-row">
            <div class="tech-badge">
                <span class="material-icons-round tech-icon">web</span> Laravel 10.x
            </div>
            <div class="tech-badge">
                <span class="material-icons-round tech-icon">terminal</span> PHP 8.x
            </div>
            <div class="tech-badge">
                <span class="material-icons-round tech-icon">dashboard</span> Bootstrap 5
            </div>
            <div class="tech-badge">
                <span class="material-icons-round tech-icon">table_chart</span> MySQL
            </div>
            <div class="tech-badge">
                <span class="material-icons-round tech-icon">dynamic_form</span> Blade Templating
            </div>
        </div>
    </div>

    {{-- CRUD Features --}}
    <div class="section-block">
        <div class="section-title">
            <span class="material-icons-round section-icon">star</span>
            Core Features
        </div>
        <div class="features-grid">
            <div class="feature-card feature-create">
                <div class="feature-icon-wrap">
                    <span class="material-icons-round">add_circle</span>
                </div>
                <div class="feature-label">Create</div>
                <div class="feature-desc">Add new products with name, description, and price.</div>
            </div>
            <div class="feature-card feature-read">
                <div class="feature-icon-wrap">
                    <span class="material-icons-round">menu_book</span>
                </div>
                <div class="feature-label">Read</div>
                <div class="feature-desc">View all products in a paginated table dashboard.</div>
            </div>
            <div class="feature-card feature-update">
                <div class="feature-icon-wrap">
                    <span class="material-icons-round">edit_note</span>
                </div>
                <div class="feature-label">Update</div>
                <div class="feature-desc">Edit existing product information at any time.</div>
            </div>
            <div class="feature-card feature-delete">
                <div class="feature-icon-wrap">
                    <span class="material-icons-round">delete_sweep</span>
                </div>
                <div class="feature-label">Delete</div>
                <div class="feature-desc">Securely remove products with a confirmation prompt.</div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <div class="about-footer">
        Built with care for <span>PSIT01-4C</span> &mdash; Academic Year 2025-2026, 2nd Semester
    </div>

</div>
@endsection