@if($collection->examples !== null)
    @if(!$collection->examples->isEmpty())
    <div>
        <span class="font-weight-bold">Examples:</span>
        @foreach ($collection->examples->all() as $example)
@markdown
```javascript
{!! $example->example !!}
```
@endmarkdown
        @endforeach
    </div>
    @endif
@endif
