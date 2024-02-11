<div>
    <div class="w-full flex pb-10">
        <div class="w-1/6 mx-1">
            <label>
                <h1>Поиск по имени</h1>
                <input wire:model.live="searchData.name" type="text"
                       class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       placeholder="Search realties...">
                @error('searchData.name') <span class="error">{{ $message }}</span> @enderror
            </label>
        </div>
        <div class="w-1/6 mx-1">
            <label>
                <h1>Количество спален</h1>
                <input wire:model.live="searchData.bedrooms_count" type="text"
                       class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       placeholder="Search realties...">
                @error('searchData.bedrooms_count') <span class="error">{{ $message }}</span> @enderror
            </label>
        </div>
        <div class="w-1/6 mx-1">
            <label>
                <h1>Количество ванных</h1>
                <input wire:model.live="searchData.bathrooms_count" type="text"
                       class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       placeholder="Search realties...">
            </label>
        </div>
        <div class="w-1/6 mx-1">
            <label>
                <h1>Количество этажей</h1>
                <input wire:model.live="searchData.storeys_count" type="text"
                       class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       placeholder="Search realties...">
            </label>
        </div>
        <div class="w-1/6 mx-1">
            <label>
                <h1>Количество гаражей</h1>
                <input wire:model.live="searchData.garages_count" type="text"
                       class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       placeholder="Search realties...">
            </label>
        </div>
        <div class="w-1/12 mx-1">
            <label>
                <h1>Цена от</h1>
                <input wire:model.live="searchData.price_from" type="text"
                       class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       placeholder="Search realties...">
            </label>
        </div>
        <div class="w-1/12 mx-1">
            <label>
                <h1>Цена до</h1>
                <input wire:model.live="searchData.price_to" type="text"
                       class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       placeholder="Search realties...">
            </label>
        </div>
    </div>
    <div class="w-full flex pb-10">
        <div class="w-1/6 relative mx-1">
            <select wire:model.live="perPage"
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-state">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>

    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-auto w-full mb-6">
            <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Bedrooms</th>
                <th class="px-4 py-2">Bathrooms</th>
                <th class="px-4 py-2">Storeys</th>
                <th class="px-4 py-2">Garages</th>
            </tr>
            </thead>
            <tbody>
            @foreach($realties as $realty)
                <tr>
                    <td class="border px-4 py-2">{{ $realty->id }}</td>
                    <td class="border px-4 py-2">{{ $realty->name }}</td>
                    <td class="border px-4 py-2">{{ $realty->price }}</td>
                    <td class="border px-4 py-2">{{ $realty->bedrooms_count }}</td>
                    <td class="border px-4 py-2">{{ $realty->bathrooms_count }}</td>
                    <td class="border px-4 py-2">{{ $realty->storeys_count }}</td>
                    <td class="border px-4 py-2">{{ $realty->garages_count }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $realties->links() }}
    </div>
</div>