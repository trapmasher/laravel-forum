@component('forum::modal-form')
    @slot('key', 'create-category')
    @slot('title', trans('Создать категорию'))
    @slot('route', Forum::route('category.store'))

    <div class="mb-3">
        <label for="title">{{ trans('Название') }}</label>
        <input type="text" name="title" value="{{ old('title') }}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="description">{{ trans('Описание') }}</label>
        <input type="text" name="description" value="{{ old('description') }}" class="form-control">
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="accepts_threads" id="accepts-threads" value="1" {{ old('accepts_threads') ? 'checked' : '' }}>
            <label class="form-check-label" for="accepts-threads">{{ trans('Включить темы') }}</label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="is_private" id="is-private" value="1" {{ old('is_private') ? 'checked' : '' }}>
            <label class="form-check-label" for="is-private">{{ trans('Сделать приватной') }}</label>
        </div>
    </div>
    @include ('forum::category.partials.inputs.color')

    @slot('actions')
        <button type="submit" class="btn btn-primary pull-right">{{ trans('Создать') }}</button>
    @endslot
@endcomponent
