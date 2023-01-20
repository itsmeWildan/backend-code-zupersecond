

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-3">
{{--    
    <div class="p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('dashboard.user.index') }}">User</a></div>
        </div>
    </div> --}}
    <div class="p-6 border-t border-gray-200">
        <div class="flex items-center">
            <img src="/images/transaction_icon.png" style="height: 50px;" class="bg-center ml-20"/>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('dashboard.transaction.index') }}">Transactions</a></div>
            
        </div>
    </div>
    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <img src="/images/category_icon.png" style="height: 50px;" class="bg-center ml-20"/>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('dashboard.category.index') }}">Category</a></div>
        </div>
    </div>
    <div class="p-6">
        <div class="flex items-center">
            <img src="/images/product_icon.png" style="height: 50px;" class="bg-center ml-20"/>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('dashboard.product.index') }}">Products</a></div>
        </div>
    </div>
</div>
