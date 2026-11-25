<div>
    <label for="name">Course Name</label>
    <input
        type="text"
        id="name"
        name="name"
        value="{{ old('name', $course->name ?? '') }}"
    >
    @error('name')
        <p>{{ $message }}</p>
    @enderror
</div>

<br>

<div>
    <label for="description">Description</label>
    <textarea
        id="description"
        name="description"
    >{{ old('description', $course->description ?? '') }}</textarea>
    @error('description')
        <p>{{ $message }}</p>
    @enderror
</div>

<br>

<div>
    <label for="duration">Duration (weeks)</label>
    <input
        type="number"
        id="duration"
        name="duration"
        min="1"
        value="{{ old('duration', $course->duration ?? '') }}"
    >
    @error('duration')
        <p>{{ $message }}</p>
    @enderror
</div>

<br>

<div>
    <label for="fee">Course Fee</label>
    <input
        type="number"
        id="fee"
        name="fee"
        step="0.01"
        min="0"
        value="{{ old('fee', $course->fee ?? '') }}"
    >
    @error('fee')
        <p>{{ $message }}</p>
    @enderror
</div>

<br>

<div>
    <label for="difficulty">Difficulty</label>
    <select id="difficulty" name="difficulty">
        @foreach(['Easy', 'Medium', 'Hard'] as $level)
            <option
                value="{{ $level }}"
                @selected(old('difficulty', $course->difficulty ?? '') === $level)
            >
                {{ $level }}
            </option>
        @endforeach
    </select>
    @error('difficulty')
        <p>{{ $message }}</p>
    @enderror
</div>

<br>

<div>
    <input type="hidden" name="is_active" value="0">

    <input
        type="checkbox"
        id="is_active"
        name="is_active"
        value="1"
        @checked(old('is_active', $course->is_active ?? true))
    >

    <label for="is_active">Active Course</label>
</div>

<br>
