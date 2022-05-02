<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ブランド立ち上げ.com</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="ブランド立ち上げ.com | あの南原竜樹 冷徹な教えでも紹介された。あなただけののブランドショッピングサイトが作成できるのはブランド立ち上げ.com">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- google material icon -->
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
		<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						clifford: '#da373d',
					}
				}
			}
		}
		</script>
		<link href="{{ asset('css/common.css') }}" rel="stylesheet">
		<!-- Scripts -->
		<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    </head>
    <body>
    	@if (Session::has('message'))
    		<div class="fixed top right py-4 px-6 bg-blue-600 z-10">
    			{{ Session::get('message') }}
    		</div>
		@endif
    	<header class="container relative m-auto">
    		<img src="{{ asset('images/home/main_01.jpg') }}">
    		<a class="application_btn" href="#form">
    			<img class="application_btn" src="{{ asset('images/home/application_btn.png') }}">
    		</a>
    	</header>
    	<!-- <h3 class="text-3xl font-bold underline text-clifford">AA</h3> -->
    	<main>
	    	<div class="bg-gray-100 pb-16 pt-16 px-4">
	    		<h1 class="text-2xl sm:text-3xl font-bold text-center mb-8">
	    			南原竜樹 冷徹な教えでも紹介されました!
	    		</h1>
	    		<iframe style="aspect-ratio: 16 / 9; width: 100%; max-width: 800px;margin: auto;" width="100%" src="https://www.youtube.com/embed/tXbnC_3nFYA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    	</div>
	    	<div class="nayami_block container mx-auto">
	    		<img class="w-100 sm:w-2/3 m-auto mb-12" src="{{ asset('images/home/main_04.png') }}">
	    		<ul>
	    			<li class="flex items-center mb-4">
	    				<img class="w-6 h-6" src="{{ asset('images/home/main_08.png') }}">
	    				<div class="text-xl sm:text-2xl ml-4">何から始めていいのか<span class="text-red-500">わからない</span></div>
	    			</li>
	    			<li class="flex items-center mb-4">
	    				<img class="w-6 h-6" src="{{ asset('images/home/main_08.png') }}">
	    				<div class="text-xl sm:text-2xl ml-4">自分のサイトを立ち上げたいけど<span class="text-red-500">専門知識</span>がない</div>
	    			</li>
	    			<li class="flex items-center">
	    				<img class="w-6 h-6" src="{{ asset('images/home/main_08.png') }}">
	    				<div class="text-xl sm:text-2xl ml-4"><span class="text-red-500">商品制作</span>や<span class="text-red-500">ブランディング</span>だけに集中したい</div>
	    			</li>
	    		</ul>
	    	</div>
	    	<div class="container m-auto mb-12 px-4">
	    		<img class="w-100 sm:w-2/3 m-auto mb-12" src="{{ asset('images/home/kaiketsu.png') }}">
	    	</div>
	    	<div class="container m-auto mb-0 sm:mb-20">
		    	<ul class="flex flex-wrap sm:-mx-4">
		    		<li class="px-4 w-100 sm:w-1/3 mb-12">
		    			<div>
		    				<img class="mb-8" src="{{ asset('images/home/main_15.jpg') }}">
		    				<div>
		    					<h3 class="text-2xl font-bold mb-4">ブランドの立ち上げをサポート</h3>
		    					<div>
		    						何から始めていいかわからない方でもカウンセリングを行い、あなたにあったブランドサイトをご提案。
		    					</div>
		    				</div>
		    			</div>
		    		</li>
		    		<li class="px-4 w-100 sm:w-1/3 mb-12">
		    			<div>
		    				<img class="mb-8" src="{{ asset('images/home/main_16.jpg') }}">
		    				<div>
		    					<h3 class="text-2xl font-bold mb-4">あなたにピッタリのショッピングサイトを作成</h3>
		    					<div>
		    						専門知識は必要なし。提案から制作まで全てブランド立ち上げ.comが行います。
		    					</div>
		    				</div>
		    			</div>
		    		</li>
		    		<li class="px-4 w-100 sm:w-1/3 mb-12">
		    			<div>
		    				<img class="mb-8" src="{{ asset('images/home/main_19.jpg') }}">
		    				<div>
		    					<h3 class="text-2xl font-bold mb-4">簡単管理画面で運用に時間が取られず、好きなことに集中できる</h3>
		    					<div>
		    						商品の追加や在庫管理も、スマホ一つで簡単操作。
		    					</div>
		    				</div>
		    			</div>
		    		</li>
		    	</ul>
	    	</div>
	    	<div class="bg-gray-100 py-20 px-4 mb-20">
	    		<div class="container m-auto text-center">
		    		<img class="w-100 sm:w-2/3 m-auto mb-12" src="{{ asset('images/home/main_11.png') }}">
		    		<ul class="flex flex-wrap sm:-mx-4 mb-12">
		    			<li class="w-100 sm:w-1/2 px-4 mb-8">
		    				<img src="{{ asset('images/home/standard_plan.png') }}">
		    			</li>
		    			<li class="w-100 sm:w-1/2 px-4 mb-8">
		    				<img src="{{ asset('images/home/premium_plan.png') }}">
		    			</li>
		    		</ul>
		    		<div class="text-2xl">
		    			まずはあなたにあったプランを
		    		</div>
		    		<div class="text-2xl mb-8">
		    			一緒に決めていきましょう。
		    		</div>
		    		<div class="px-4">
		    			<a href="#form">
		    				<img class="w-100 sm:w-1/2 m-auto" src="{{ asset('images/home/application_btn.png') }}">
		    			</a>
		    		</div>
		    	</div>
		    </div>
	    	<div class="container m-auto mb-20 px-4 sm:px-0">
	    		<img class="w-100 sm:w-2/3 m-auto mb-12 sm:mb-20" src="{{ asset('images/home/main_17.png') }}">
	    		<img class="w-100 m-auto " src="{{ asset('images/home/main_20.png') }}">
	    	</div>
	    	<div class="bg-gray-100 py-20 px-4">
	    		<div class="container m-auto">
	    			<img class="w-100 sm:w-2/3 m-auto mb-8" src="{{ asset('images/home/main_13.png') }}">
		    		<ul>
		    			<li class="bg-white py-4 px-6 mb-8">
		    				<div class="flex flex-wrap items-center is-faq-q justify-between">
		    					<div class="faq-text flex items-center">
		    						<img class="w-12 mr-4" src="{{ asset('images/home/main_37.jpg') }}">
		    						<div>無料相談を受けた後に必ず購入をしなくてはならないのですか？</div>
		    					</div>
		    					<img class="w-6 sm:w-8 is-faq-open" src="{{ asset('images/home/main_40.jpg') }}">
		    					<img class="w-6 sm:w-8 hidden is-faq-close" src="{{ asset('images/home/main_44.jpg') }}">
		    				</div>
		    				<div class="hidden is-faq-a mt-4">
		    					<div class="flex items-center">
		    						<img class="w-12 mr-4" src="{{ asset('images/home/main_46.jpg') }}">
		    						<div>いいえ。必ず購入する必要はございません。</div>
		    					</div>
		    				</div>
		    			</li>
		    			<li class="bg-white py-4 px-6 mb-8">
		    				<div class="flex flex-wrap items-center is-faq-q justify-between">
		    					<div class="faq-text flex items-center">
		    						<img class="w-12 mr-4" src="{{ asset('images/home/main_37.jpg') }}">
		    						<div>無料相談では何をしますか？</div>
		    					</div>
		    					<img class="w-6 sm:w-8 is-faq-open" src="{{ asset('images/home/main_40.jpg') }}">
		    					<img class="w-6 sm:w-8 hidden is-faq-close" src="{{ asset('images/home/main_44.jpg') }}">
		    				</div>
		    				<div class="hidden is-faq-a mt-4">
		    					<div class="flex items-center">
		    						<img class="w-12 mr-4" src="{{ asset('images/home/main_46.jpg') }}">
		    						<div>サービスの詳細な説明やどのようなブランドサイトを立ち上げたいかのヒアリング等を行います。</div>
		    					</div>
		    				</div>
		    			</li>
		    			<li class="bg-white py-4 px-6">
		    				<div class="flex flex-wrap items-center is-faq-q justify-between">
		    					<div class="faq-text flex items-center">
		    						<img class="w-12 mr-4" src="{{ asset('images/home/main_37.jpg') }}">
		    						<div>何もデザインやプログラミングができないですが初められますか？</div>
		    					</div>
		    					<img class="w-6 sm:w-8 is-faq-open" src="{{ asset('images/home/main_40.jpg') }}">
		    					<img class="w-6 sm:w-8 hidden is-faq-close" src="{{ asset('images/home/main_44.jpg') }}">
		    				</div>
		    				<div class="hidden is-faq-a mt-4">
		    					<div class="flex items-center">
		    						<img class="w-12 mr-4" src="{{ asset('images/home/main_46.jpg') }}">
		    						<div>はい。始めることができます。</div>
		    					</div>
		    				</div>
		    			</li>
		    		</ul>
	    		</div>
	    	</div>
	    	<div class="container m-auto mb-16 sm:mt-20 sm:mb-20">
	    		<img class="w-100 sm:w-2/3 m-auto" src="{{ asset('images/home/1648984397447.jpg') }}">
	    	</div>
    		<form class="container m-auto mb-12 px-4 sm:px-0" id="form" method="POST" action="{{ url('application') }}">
    			@csrf
    			<div class="sm:flex flex-wrap items-center justify-center mb-2">
                    <label for="name" class="w-100 sm:w-36 pr-6 text-right">
                        お名前
                    </label>
                    <input id="name" type="text" class="w-100 sm:w-80 md:w-8/12 h-8 md:h-20 bg-gray-100 rounded px-4 @error('name')  border-red-500 @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name">

                    @error('name')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="sm:flex flex-wrap items-center justify-center mb-2">
                    <label for="kana" class="w-100 sm:w-36 pr-6 text-right">
                        ふりがな
                    </label>

                    <input id="kana" type="text" class="w-100 sm:w-80 md:w-8/12 h-8 md:h-20 bg-gray-100 rounded px-4 @error('kana')  border-red-500 @enderror"
                        name="kana" value="{{ old('kana') }}" required autocomplete="kana">

                    @error('kana')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="sm:flex flex-wrap items-center justify-center mb-2">
                    <label for="email" class="w-100 sm:w-36 pr-6 text-right">
                        メールアドレス
                    </label>

                    <input id="email" type="email"
                        class="w-100 sm:w-80 md:w-8/12 h-8 md:h-20 bg-gray-100 rounded px-4 @error('email') border-red-500 @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="sm:flex flex-wrap items-center justify-center mb-16">
                    <label for="tel" class="w-100 sm:w-36 pr-6 text-right">
                        電話番号
                    </label>

                    <input id="tel" type="text"
                        class="w-100 sm:w-80 md:w-8/12 h-8 md:h-20 bg-gray-100 rounded px-4 @error('tel') border-red-500 @enderror" name="tel"
                        value="{{ old('tel') }}" required autocomplete="tel">

                    @error('tel')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="text-center">
                	<button type="submit">
                		<img class="w-40 sm:w-60" src="{{ asset('images/home/form_submit.jpg') }}">
                	</button>
                </div>
    		</form>
    	</main>
    	<footer></footer>
	    <script type="text/javascript">
			$('.is-faq-q').on('click', function() {
				$(this).parent().find('.is-faq-a').slideToggle();

				if ($(this).parent().find('.is-faq-open').hasClass('hidden')) {
    				$(this).parent().find('.is-faq-open').removeClass('hidden');
    				$(this).parent().find('.is-faq-close').addClass('hidden');
				}else{
					$(this).parent().find('.is-faq-open').addClass('hidden');
    				$(this).parent().find('.is-faq-close').removeClass('hidden');
				}
			});
		</script>
    </body>
</html>
