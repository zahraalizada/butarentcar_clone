<?php

use GuzzleHttp\Client;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

if (!function_exists('imageUpload')) {
    function imageUpload($image, $path, $size): ?string
    {
        if (file_exists($image)) {
            $storagePath = public_path($path);
            if (!File::exists($storagePath)) {
                File::makeDirectory($storagePath);
            }
            $filename = uniqid() . '-' . uniqid();
            Image::make($image)->encode('webp', 90)->resize($size[0], $size[1])->save($path . '/' . $filename . '.webp');
            return '/'.$path.'/' . $filename . '.webp';
        }
        return null;
    }
}

if (!function_exists('videoUpload')) {
    function videoUpload($video, $path): ?string
    {
        if (file_exists($video)) {
            $randomName = Str::random(10) . '.' . $video->getClientOriginalExtension();
            $storagePath = public_path($path);
            if (!File::exists($storagePath)) {
                File::makeDirectory($storagePath);
            }
            $video->move(public_path($path), $randomName);
            return  '/public/' . $path . '/' . $randomName;
        }
        return null;
    }
}

if (!function_exists('multiSizeImageUpload')) {
    function multiSizeImageUpload($image, $path, $size): ?string
    {
        if (file_exists($image)) {
            $filename = uniqid() . '-' . uniqid();
            for ($i = 0; $i < count($path); $i++) {
                $storagePath = public_path($path[$i]);
                if (!File::exists($storagePath)) {
                    File::makeDirectory($storagePath);
                }
                Image::make($image)->encode('webp', 90)->
                resize($size[$i][0], $size[$i][1])->save($path . '/' . $filename . '.webp');
            }
            return '/' . $path . '/' . $filename . '.webp';
        }
        return null;
    }
}

if (!function_exists('successInsert')) {
    function successInsert(): ?string
    {
        return 'Məlumat əlavə edildi';
    }
}
if (!function_exists('successUpdate')) {
    function successUpdate(): ?string
    {
        return 'Məlumat dəyişdirildi';
    }
}

if (!function_exists('lang')) {
    function lang(): string
    {
        return app()->getLocale();
    }
}

if (!function_exists('static_key')) {
    function static_key($key): string
    {
        $keys = Cache::rememberForever('static_key_' . lang(), function () {
            $path = base_path('resources/lang/' . lang() . '/static.json');

            return json_decode(file_get_contents($path), true);
        });

        return $keys[$key];
    }
}

if (!function_exists('tag_value')) {
    function tag_value($tags, $key = 0): string
    {
        $value = explode(',',$tags);
        return $value[$key];
    }
}

if (! function_exists('youtube_image')) {
    #[Pure] function youtube_image($link): string
    {
        $id = get_later($link, '?v=');

        return 'https://i1.ytimg.com/vi/'.$id.'/hqdefault.jpg';
    }
}

if (! function_exists('get_later')) {
    function get_later($text, $key): bool|string
    {
        $search = strlen($key);
        $Index = strpos($text, $key);

        if ($Index !== false) {
            return substr($text, $Index + $search);
        } else {
            return false;
        }
    }
}

if (! function_exists('weather')) {
    function weather()
    {
       return Cache::remember('weather',Carbon::now()->endOfDay()->addSecond(),function (){
            $response = Http::withHeaders([
                "authorization" => "apikey 4hLtk7aGRmtnOLiHgTaROi:2Wik5PFYSOX0ii1fl5eXWf",
                "content-type" => "application/json"
            ])->get("https://api.collectapi.com/weather/getWeather", [
                "data.lang" => "tr",
                "data.city" => "baku"
            ]);

            if ($response->failed()) {
                return "HTTP Error: " . $response->status();
            } else {
                $data = $response->body();
                $data = json_decode($data);
                return $data->result[0];
            }
        });

    }
}
if (! function_exists('currency')) {
    function currency()
    {
        return Cache::remember('currencies',Carbon::now()->endOfDay()->addSecond(),function (){
            $response = Http::withHeaders([
                "content-type" => "application/xml"
            ])->get("https://www.cbar.az/currencies/".Carbon::now()->format('d.m.Y').".xml");

            if ($response->failed()) {
                return "HTTP Error: " . $response->status();
            } else {
                $data = $response->body();
                $xml = simplexml_load_string($data, "SimpleXMLElement", LIBXML_NOCDATA);
                $json = json_encode($xml);
                $array = json_decode($json,TRUE);
                $nom = [];
                $nom['TRY']['val']=$array['ValType'][1]['Valute'][38]['Value'];
                $nom['TRY']['code']="&#8378;";
                $nom['USD']['val']=$array['ValType'][1]['Valute'][0]['Value'];
                $nom['USD']['code']="&dollar;";
                $nom['EUR']['val']=$array['ValType'][1]['Valute'][1]['Value'];
                $nom['EUR']['code']="&#8364;";
                $nom['RUB']['val']=$array['ValType'][1]['Valute'][34]['Value'];
                $nom['RUB']['code']="&#x20BD;";
                return $nom;
            }
        });

    }
}

if (! function_exists('prev_segments')) {
     function prev_segments($uri): array
    {
        $segments = explode('/', str_replace(''.url('').'', '', $uri));

        return array_values(array_filter($segments, function ($value) {
            return $value !== '';
        }));
    }
}

if (! function_exists('canonical_url')) {
    function canonical_url(): array|string
    {
        if (\Illuminate\Support\Str::startsWith($current = url()->current(), 'https://www')) {
            return str_replace('https://www.', 'https://', $current);
        }

        return str_replace('https://', 'https://www.', $current);
    }
}


