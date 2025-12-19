@extends('admin.layouts.app')

@section('page-title', 'Create Service')

@section('content')
    <div class="form-card">
        <h2 style="margin-bottom: 30px; font-size: 24px; font-weight: 700;">Create New Service</h2>

        <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Service Title *</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" required
                    placeholder="e.g., Strategic Corporate Management">
                @error('title')
                    <span style="color: #dc3545; font-size: 13px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description *</label>
                <textarea id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                @error('description')
                    <span style="color: #dc3545; font-size: 13px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Service Image *</label>
                <input type="file" id="image" name="image" accept="image/*" required>
                <small style="color: #666;">Recommended size: 600x400px</small>
                @error('image')
                    <span style="color: #dc3545; font-size: 13px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Service Features (Bullet Points)</label>
                <div id="features-container">
                    <!-- Default 4 feature inputs -->
                    @for($i = 0; $i < 4; $i++)
                        <input type="text" name="features[]" value="{{ old('features.' . $i) }}"
                            placeholder="Feature {{ $i + 1 }}" style="margin-bottom: 10px;">
                    @endfor
                </div>
                <button type="button" onclick="addFeature()" class="btn btn-secondary" style="margin-top: 10px;">+ Add
                    More</button>
            </div>

            <div class="form-group">
                <label for="button_text">Button Text</label>
                <input type="text" id="button_text" name="button_text" value="{{ old('button_text') }}"
                    placeholder="e.g., Get Wedding Quote">
            </div>

            <div class="form-group">
                <label for="button_link">Button Link</label>
                <input type="text" id="button_link" name="button_link" value="{{ old('button_link') }}"
                    placeholder="e.g., /contact">
            </div>

            <div class="form-group">
                <label for="order">Display Order</label>
                <input type="number" id="order" name="order" value="{{ old('order', 0) }}" min="0">
            </div>

            <div class="form-group">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                    <span>Active</span>
                </label>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Create Service</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        function addFeature() {
            const container = document.getElementById('features-container');
            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'features[]';
            input.placeholder = 'New Feature';
            input.style.marginBottom = '10px';
            container.appendChild(input);
        }
    </script>
@endsection