@props([
    'column' => null,
    'theme' => null,
    'sortField' => null,
    'sortDirection' => null,
    'enabledFilters' => null,
    'actions' => null,
    'dataField' => null,
])
<div>
    @if($column->hidden === false)
        <th class="{{ $theme->table->thClass .' '. $column->headerClass }}"
            style="width: min-content;@if($column->sortable)cursor:pointer; @endif{{ $theme->table->thStyle.' '. $column->headerStyle }}">
            <div class="{{ $theme->cols->divClass }}">
                @if($column->sortable === true)
                    <span class="text-base pr-2 text-center" style="font-size: 1.2rem !important;">
						@if ($sortField !== $column->field)
                            &#8597;
                        @elseif ($sortDirection == 'desc')
                            &#8593;
                        @else
                            &#8595;
                        @endif
					</span>
                @endif
                <span
                    @if($column->sortable === true)
                    wire:click="sortBy('{{ $column->dataField !='' ? $column->dataField : $column->field }}')"
                    @endif
                >
                    {{$column->title}}
                </span>
            </div>
        </th>
    @endif
</div>
