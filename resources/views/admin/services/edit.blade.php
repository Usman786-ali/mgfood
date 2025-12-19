@extends('admin.layouts.app')

@section('page-title', 'Edit Service')

@section('content')
    <div class="form-card">
        <h2 style="margin-bottom: 30px; font-size: 24px; font-weight: 700;">Edit Service</h2>

        <form method="POST" action="{{ route('admin.services.update', $service) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Service Title *</label>
                <input type="text" id="title" name="title" value="{{ old('title', $service->title) }}" required>
                @error('title')
                    <span style="color: #dc3545; font-size: 13px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description *</label>
                <textarea id="description" name="description" rows="4"
                    required>{{ old('description', $service->description) }}</textarea>
                @error('description')
                    <span style="color: #dc3545; font-size: 13px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Service Image</label>
                @if($service->image)
                    <div style="margin-bottom: 10px;">
                        <img src="{{ asset('storage/' . $service->image) }}" alt="Current"
                            style="max-width: 200px; border-radius: 8px;">
                    </div>
                @endif
                <input type="file" id="image" name="image" accept="image/*">
                <small style="color: #666;">Leave empty to keep current image</small>
            </div>

            <div class="form-group">
                <label>Service Features (Bullet Points)</label>
                <div id="features-container">
                    @if($service->features && count($service->features) > 0)
                        @foreach($service->features as $feature)
                            <input type="text" name="features[]" value="{{ $feature }}" style="margin-bottom: 10px;">
                        @endforeach
                    @else
                        @for($i = 0; $i < 4; $i++)
                            <input type="text" name="features[]" placeholder="Feature {{ $i + 1 }}" style="margin-bottom: 10px;">
                        @endfor
                    @endif
                </div>
                <button type="button" onclick="addFeature()" class="btn btn-secondary" style="margin-top: 10px;">+ Add
                    More</button>
            </div>

            <div class="form-group">
                <label for="button_text">Button Text</label>
                <input type="text" id="button_text" name="button_text"
                    value="{{ old('button_text', $service->button_text) }}">
            </div>

            <div class="form-group">
                <label for="button_link">Button Link</label>
                <input type="text" id="button_link" name="button_link"
                    value="{{ old('button_link', $service->button_link) }}">
            </div>

            <div class="form-group">
                <label for="order">Display Order</label>
                <input type="number" id="order" name="order" value="{{ old('order', $service->order) }}" min="0">
            </div>

            <div class="form-group">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $service->is_active) ? 'checked' : '' }}>
                    <span>Active</span>
                </label>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update Service</button>
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