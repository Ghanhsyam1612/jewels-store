<div id="diamond-list">
    @foreach($diamonds as $diamond)
    <div class="diamond-item">
        <!-- Your existing diamond item HTML -->
    </div>
    @endforeach
</div>

<div class="pagination-container">
    {{ $diamonds->links() }}
</div> 