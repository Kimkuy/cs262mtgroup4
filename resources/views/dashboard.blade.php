@extends('layout')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

<style>
    
    .dashboard-wrapper {
        min-height: 100vh;
        background: transparent; 
        color: #333333;
        padding: 1rem 0 2rem;
    }

    
    .profile-card {
        background: #001f54; 
        border: 1px solid #e0b13d; 
        border-radius: 8px; 
        padding: 0.8rem 1.2rem; 
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }
    .profile-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #e0b13d; 
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        font-weight: 700;
        color: #001f54;
        flex-shrink: 0;
        text-transform: uppercase;
    }
    .profile-info h3 {
        margin: 0;
        font-size: 1.05rem;
        font-weight: 700;
        color: #fff;
    }
    .profile-info p {
        margin: 0;
        font-size: .78rem;
        color: #8da9c4;
    }
    .profile-badge {
        margin-left: auto;
        background: rgba(224, 177, 61, 0.15);
        border: 1px solid #e0b13d;
        color: #e0b13d;
        border-radius: 20px;
        padding: .15rem .6rem;
        font-size: .7rem;
        font-weight: 600;
    }

    
    .section-label {
        font-size: .68rem;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: #e63946; 
        margin-bottom: .2rem;
        font-weight: 700;
    }
    .section-title {
        font-size: 1.2rem; 
        font-weight: 700;
        color: #001f54;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: .5rem;
    }
    .section-title::after {
        content: '';
        flex: 1;
        height: 1px;
        background: linear-gradient(to right, #001f54, transparent);
    }

    
    .dashboard-actions-bar {
        background: transparent;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 0.6rem;
        margin-bottom: 1.5rem;
    }

    
    .btn-view-news, .btn-edit {
        background: transparent;
        border-radius: 5px;
        padding: .35rem .85rem; 
        font-size: .8rem;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: .3rem;
        transition: background .15s, color .15s;
    }
    .btn-view-news { border: 1px solid #001f54; color: #001f54; }
    .btn-view-news:hover { background: #001f54; color: #ffffff; }

    .btn-edit { border: 1px solid #e63946; color: #e63946; }
    .btn-edit:hover { background: #e63946; color: #ffffff; }

    
    .custom-post-card {
        background: transparent;
        border: 1px solid #001f54; 
        border-radius: 8px;
        padding: 1.2rem; 
        margin-bottom: 1.2rem;
    }

    .btn-inline-edit {
        color: #e63946;
        border: 1px solid #e63946;
        background: transparent;
        font-size: 0.75rem;
        font-weight: 600;
        border-radius: 5px;
        padding: 0.2rem 0.6rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        transition: background .15s, color .15s;
    }
    .btn-inline-edit:hover { background: #e63946; color: #ffffff; }

    
    .form-control-custom {
        background: transparent;
        border: 1px solid #ced4da;
        border-radius: 6px;
        padding: 0.5rem 0.75rem; 
        color: #333333;
        font-size: 0.88rem;
        width: 100%;
        transition: border-color 0.15s;
    }
    .form-control-custom:focus {
        outline: none;
        border-color: #e63946; 
        box-shadow: 0 0 0 2px rgba(230, 57, 70, 0.1);
    }
    .area-content {
        min-height: 90px; 
        resize: vertical;
    }

    
    .premium-upload-zone {
        position: relative;
        border: 1.5px dashed #ced4da;
        background: transparent;
        border-radius: 6px;
        padding: 0.8rem; 
        text-align: center;
        cursor: pointer;
    }
    .premium-upload-zone input[type="file"] {
        position: absolute;
        inset: 0;
        opacity: 0;
        cursor: pointer;
    }
    .premium-upload-zone:hover { border-color: #e63946; }
    .premium-upload-zone i {
        font-size: 1.1rem;
        color: #001f54;
        display: inline-block;
        margin-right: 0.3rem;
    }
    .premium-upload-zone span {
        font-size: 0.8rem;
        color: #6c757d;
    }
    .file-name-pill {
        margin-top: 0.25rem;
        font-size: 0.75rem;
        color: #e63946;
        font-weight: 600;
    }

    
    .btn-premium-action {
        background: #e63946; 
        color: #ffffff;
        font-weight: 700;
        font-size: 0.85rem;
        border: none;
        border-radius: 6px;
        padding: 0.45rem 1.2rem;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        transition: background-color 0.15s;
    }
    .btn-premium-action:hover { background: #cb2d3a; }
</style>

<div class="dashboard-wrapper">
    <div class="container" style="max-width: 780px;"> 

        
        @auth
        <div class="profile-card">
            <div class="profile-avatar">
                {{ substr(auth()->user()->name, 0, 1) }}
            </div>
            <div class="profile-info">
                <h3>{{ auth()->user()->name }}</h3>
                <p>{{ auth()->user()->email }}</p>
            </div>
        </div>
        @endauth

        @if(isset($posts) && count($posts) > 0)
            <div class="section-label">// active management</div>
            <div class="section-title">Your Content Feed</div>
            
            @foreach($posts as $postItem)
                <div class="custom-post-card">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <div>
                            <h4 class="h6 fw-bold text-dark m-0 d-inline-block">{{ $postItem->title }}</h4>
                            <span class="badge ms-2" style="font-size: 0.65rem; background-color: #001f54; color: #e0b13d; border: 1px solid #e0b13d;">
                                {{ ucfirst($postItem->news_type ?? 'cambodia') }}
                            </span>
                        </div>
                        @auth
                            <a href="/edit-post/{{ $postItem->id }}" class="btn-inline-edit">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                        @endauth
                    </div>
                    <p class="text-secondary small m-0">{{ Str::limit($postItem->body, 120) }}</p>
                </div>
            @endforeach
        @endif

        @auth
        <div id="createPostForm" class="mt-3">
            <div class="section-label">// publish content</div>
            <div class="section-title">Create a Post</div>

            @if ($errors->any())
                <div class="alert alert-danger py-2 px-3 rounded mb-3" style="background:#fff5f5; border: 1px solid #dc3545; color:#bd2130; font-size: 0.82rem;">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="custom-post-card">
                <form action="/create-post" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-2">
                        <input type="text" 
                               name="title" 
                               class="form-control-custom" 
                               placeholder="Post title..." 
                               value="{{ old('title') }}">
                    </div>

                    <div class="mb-2">
                        <textarea name="body" 
                                  class="form-control-custom area-content" 
                                  placeholder="What's on your mind? Share news, updates...">{{ old('body') }}</textarea>
                    </div>

                    <div class="mb-2">
                        <select name="news_type" class="form-control-custom" style="cursor: pointer;">
                            <option value="cambodia" {{ old('news_type') == 'cambodia' ? 'selected' : '' }}>Target Destination: Cambodia Feed</option>
                            <option value="global" {{ old('news_type') == 'global' ? 'selected' : '' }}>Target Destination: Global Feed</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="premium-upload-zone" id="uploadZone">
                            <input type="file" 
                                   name="image" 
                                   accept="image/*" 
                                   id="imageInput" 
                                   onchange="showFileName(this)">
                            <i class="bi bi-image"></i>
                            <span>Attach an image</span>
                            <div class="file-name-pill" id="fileName"></div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-premium-action">
                            <i class="bi bi-send"></i>
                            <span>Publish</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @endauth

        @guest
        <div class="custom-post-card text-center py-4">
            <i class="bi bi-shield-lock" style="font-size: 1.8rem; color: #e63946;"></i>
            <p class="small text-muted mt-1 mb-2">Log in to create or submit a news announcement.</p>
            <a href="/login" class="btn-edit">
                <i class="bi bi-box-arrow-in-right"></i> Account Login
            </a>
        </div>
        @endguest

    </div>
</div>

<script>
function showFileName(input) {
    const label = document.getElementById('fileName');
    label.textContent = input.files.length ? '📎 ' + input.files[0].name : '';
}

document.addEventListener('DOMContentLoaded', () => {
    const scrollBtn = document.getElementById('scrollCreateBtn');
    const targetForm = document.getElementById('createPostForm');
    
    if (scrollBtn && targetForm) {
        scrollBtn.addEventListener('click', (e) => {
            e.preventDefault();
            targetForm.scrollIntoView({ behavior: 'smooth', block: 'start' });
            setTimeout(() => {
                const titleInput = targetForm.querySelector('[name="title"]');
                if (titleInput) titleInput.focus();
            }, 500);
        });
    }
});
</script>

@endsection