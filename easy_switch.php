switch (@$_POST['word']) {
    case '焼き石':
    case '石':
    case 'いし':
    case 'stone':
    case 'Stone':
        $id = "1";
        $sub = "焼き石 → 1:0<br>
                花崗岩 → 1:1<br>
                磨かれた花崗岩 → 1:2<br>
                閃緑岩 → 1:3<br>
                磨かれた閃緑岩 → 1:4<br>
                安山岩 → 1:5<br>
                磨かれた安山岩 → 1:6<br>";
        break;
    
    case '芝':
    case 'しば':
    case '芝ブロック':
    case '芝生':
    case 'grassblock':
        $id = "2";
        break;

    case '土':
    case 'つち':
    case '土ブロック':
    case 'Dirt':
    case 'dirt':
        $id = "3";
        break;

    case '丸石':
    case 'まるいし':
    case 'Cobblestone':
    case 'CobbleStone':
    case 'cobblestone':
        $id = "4";
        break;

    case '木材':
    case 'もくざい':
    case 'WoodenPlank':
    case 'woodenplank':
    case 'Woodenplank':
        $id = "5";
        $sub = "オーク → 5:0<br>
                松 → 5:1<br>
                白樺 → 5:2<br>
                ジャングル → 5:3<br>
                アカシア → 5:4<br>
                ダークオーク → 5:5<br>";
        break;

    case '苗木':
    case 'なえぎ':
    case 'Sapling':
    case 'sapling':
        $id = "6";
        $sub = "オーク → 6:0<br>
                松 → 6:1<br>
                白樺 → 6:2<br>
                ジャングル → 6:3<br>
                アカシア → 6:4<br>
                ダークオーク → 6:5<br>";
        break;

    case '岩盤':
    case 'がんばん':
    case '一番下のブロック':
    case '一番固いブロック':
    case 'Bedrock':
    case 'bedrock':
        $id = "7";
        break;

    case '水':
    case 'みず':
    case 'Water':
    case 'water':
        $id = "8";
        break;

    case '流水':
    case 'りゅうすい':
    case '流れてる水':
    case 'StationaryWater':
    case 'stationarywater':
        $id = "9";
        break;

    case '溶岩':
    case 'ようがん':
    case 'Lave':
    case 'lave':
    case 'あっちっちー':
    case 'マグマ':
        $id = "10";
        break;

    case '流溶岩':
    case 'りゅうようがん':
    case '流れてる溶岩':
    case 'StationaryLave':
    case 'stationarylave':
        $id = "11";
        break;

    case '砂':
    case 'すな':
    case 'サンド':
    case 'Sand':
    case 'sand':
        $id = "12";
        $sub = "砂 → 12:0<br>
                赤砂 → 12:1<br>";
        break;

    case '砂利':
    case 'じゃり':
    case 'ジャリ':
    case 'Gravel':
    case 'gravel':
        $id = "13";
        break;

    case '金鉱石':
    case '金こうせき':
    case 'きんこうせき':
    case 'GoldOre':
    case 'goldore':
        $id = "14";
        break;

    case '鉄鉱石':
    case '鉄こうせき':
    case 'てっこうせき':
    case 'てつこうせき':
    case 'IronOre':
    case 'ironore':
        $id = "15";
        break;

    case '石炭鉱石':
    case '石炭こうせき':
    case 'せきたんこうせき':
    case 'CoalOre':
    case 'coalore':
        $id = "16";
        break;

    case '原木':
    case '木':
    case 'げんぼく':
    case 'き':
    case 'ウッド':
    case 'Wood':
    case 'wood':
        $id = "17";
        $sub = "オーク → 17:0<br>
                松 → 17:1<br>
                白樺 → 17:2<br>
                ジャングル → 17:3<br>";
        break;

    case '葉':
    case 'は':
    case '葉っぱ':
    case 'はっぱ':
    case 'リーフ':
    case 'Leaves':
    case 'leaves':
        $id = "18";
        $sub = "オーク → 18:0<br>
                松 → 18:1<br>
                白樺 → 18:2<br>
                ジャングル → 18:3<br>";
        break;

    case 'スポンジ':
    case 'すぽんじ':
    case 'スポンジボブ':
    case 'ボブ':
    case 'Sponge':
    case 'sponge':
        $id = "19";
        break;

    case 'ガラス':
    case 'がらす':
    case '硝子':
    case '光の入り口':
    case 'Glass':
    case 'glass':
        $id = "20";
        break;

    case 'ラピスラズリ鉱石':
    case 'ラピスラズリこうせき':
    case 'ラピス鉱石':
    case 'ラピスこうせき':
    case 'ラ鉱':
    case 'ラ石':
    case 'LapisLazuliOre':
    case 'lapislazuliore':
        $id = "21";
        break;

    case 'ラピスラズリブロック':
    case 'ラピスラズリのブロック':
    case 'ラピスブロック':
    case 'ラピスのブロック':
    case 'LapisLazuliBlock':
    case 'lapislazuliblock':
        $id = "22";
        break;

    case '砂岩':
    case 'さがん':
    case '左岸':
    case '固い砂':
    case '固まった砂':
    case 'SandStone':
    case 'sandstone':
        $id = "24";
        $sub = "砂岩 → 24:0<br>
                模様入りの砂岩 → 24:1<br>
                なめらかな砂岩 → 24:2<br>";
        break;

    case 'ベッド':
    case 'べっど':
    case 'ベット':
    case 'べっと':
    case 'Bed':
    case 'bed':
    case '夜の営み':
    case '寝るやつ':
        $id = "26 or 355";
        break;

    case 'パワードレール':
    case 'パワーレール':
    case '動力レール':
    case '赤いレール':
    case 'PoweredRail':
    case 'poweredrail':
        $id = "27";
        break;

    case '蜘蛛の巣':
    case '蜘蛛の糸':
    case 'くもの巣':
    case 'くもの糸':
    case 'クモの巣':
    case 'クモの糸':
    case '引っかかると厄介なやつ':
    case 'Cobweb':
    case 'cobweb':
        $id = "30";
        break;

    case '草':
    case 'ボーボー':
    case '雑草':
    case 'シダ':
    case 'Grass':
    case 'grass':
        $id = "31";
        $sub = "ノーマル → 31:1<br>
                ふぁさふぁさしたやつ → 31:2<br>";
        break;

    case '枯れた草':
    case 'かれた草':
    case '死んだ草':
    case 'しんだ草':
    case '砂漠の草':
    case 'さばくの草':
    case '茶色の草':
    case '茶色い草':
    case 'DeadBush':
    case 'deadbush':
        $id = "32";
        break;

    case '羊毛':
    case '羊':
    case '羊の毛':
    case 'ウール':
    case 'Wool':
    case 'wool':
        $id = "35";
        $sub = "白 → 35:0<br>
                オレンジ → 35:1<br>
                マゼンタ → 35:2<br>
                水色 → 35:3<br>
                黄 → 35:4<br>
                黄緑 → 35:5<br>
                ピンク → 35:6<br>
                グレー → 35:7<br>
                ライトグレー → 35:8<br>
                シアン → 35:9<br>
                紫 → 35:10<br>
                青 → 35:11<br>
                茶色 → 35:12<br>
                緑 → 35:13<br>
                赤 → 35:14<br>
                黒 → 35:15<br>";
        break;

    case 'タンポポ':
    case 'たんぽぽ':
    case '黄色い花':
    case '黄色の花':
    case 'Dandelion':
    case 'dandelion':
        $id = "37";
        break;

    case '花':
    case 'チューリップ':
    case '赤い花':
    case 'ラン':
    case '蘭':
    case 'アリウム':
    case '紺碧':
    case 'Flower':
    case 'Flowers':
    case 'flower':
    case 'flowers':
        $id = "38";
        $sub = "ポピー → 38:0<br>
                青オーキッド → 38:1<br>
                アリウム → 38:2<br>
                紺碧 → 38:3<br>
                チューリップ（赤） → 38:4<br>
                チューリップ（オレンジ） → 38:5<br>
                チューリップ（白） → 38:6<br>
                チューリップ（ピンク） → 38:7<br>
                真ん中黄色くて花びら白いやつ → 38:8<br>";
        break;

    case '茶色のキノコ':
    case '茶色のきのこ':
    case '茶キノコ':
    case '茶きのこ':
    case 'BrownMushroom':
    case 'brownmushroom':
        $id = "39";
        break;

    case '赤色のキノコ':
    case '赤色のきのこ':
    case '赤キノコ':
    case '赤きのこ':
    case 'RedMushroom':
    case 'redmushroom':
        $id = "40";
        break;

    case '金ブロック':
    case '金ぶろっく':
    case '金のブロック':
    case '金のぶろっく':
    case 'ゴールドブロック':
    case 'ゴールドのブロック':
    case 'GoldBlock':
    case 'goldblock':
        $id = "41";
        break;

    case '鉄ブロック':
    case '鉄ぶろっく':
    case '鉄のブロック':
    case '鉄のぶろっく':
    case 'アイアンブロック':
    case 'アイアンのブロック':
    case 'アイアンマン':
    case 'IronBlock':
    case 'ironblock':
        $id = "42";
        break;

    case '重ねた石の半ブロック':
    case '２枚の石の半ブロック':
    case '２重の石の半ブロック':
    case 'DoubleStoneSlab':
    case 'doublestoneslab':
        $id = "43";
        break;

    case '半ブロック':
    case '半分のブロック':
    case '半分ブロック':
    case 'ハーフブロック':
    case 'ハーフブロック':
    case '半分のやつ':
    case 'Slab':
    case 'slab':
        $id = "44";
        $sub = "石 → 44:0<br>
                砂岩 → 44:1<br>
                木材 → 44:2<br>
                丸石 → 44:3<br>
                レンガ → 44:4<br>
                石レンガ → 44:5<br>
                ネザー水晶 → 44:6<br>
                石２ → 44:7<br>
                上にある石 → 44:8<br>
                上にある砂岩 → 44:9<br>
                上にある木材 → 44:10<br>
                上にある丸石 → 44:11<br>
                上にあるレンガ → 44:12<br>
                上にある石レンガ → 44:13<br>
                上にあるネザー水晶 → 44:14<br>
                上にある石２ → 44:15<br>";
        break;

    case 'レンガブロック':
    case 'レンガのブロック':
    case 'れんがブロック':
    case 'れんがのブロック':
    case '煉瓦ブロック':
    case '煉瓦のブロック':
    case 'BrickBlock':
    case 'brickblock':
        $id = "45";
        break;

    case 'TNT':
    case 'tnt':
    case 'ダイナマイト':
    case '爆弾':
    case '爆発王':
    case '破壊王':
        $id = "46";
        break;

    case '本棚':
    case 'ほんだな':
    case 'BookShelf':
    case 'bookshelf':
        $id = "47";
        break;

    case '苔石':
    case 'こけいし':
    case 'スポーン部屋の石':
    case '緑の石':
    case '緑の丸石':
    case 'MossStone':
    case 'mossstone':
        $id = "48";
        break;

    case '黒曜石':
    case 'ダイヤピッケルで掘るやつ':
    case 'こくようせき':
    case 'Obsidian':
    case 'obsidian':
        $id = "49";
        break;

    case '松明':
    case 'トーチ':
    case '明るい':
    case 'Torch':
    case 'torch':
        $id = "50";
        break;

    case '火':
    case '炎':
    case 'メラメラ':
    case 'ファイヤー':
    case 'Fire':
    case 'fire':
    case 'FireBlock':
    case 'fireblock':
        $id = "51";
        break;

    case 'モンスタースポナー':
    case 'スポナー':
    case 'モンスタースポーン':
    case 'スポーン部屋のブロック':
    case 'スポブロ':
    case 'MonsterSpawner':
    case 'monsterspawner':
        $id = "52";
        break;

    case '木の階段':
    case '木製の階段':
    case '階段　木':
    case 'オークの階段':
    case '椅子':
    case 'OakWoodStairs':
    case 'oakwoodstairs':
        $id = "53";
        break;

    case 'チェスト':
    case '箱':
    case '宝箱':
    case '物入れ':
    case 'Chest':
    case 'chest':
        $id = "54";
        break;

    case 'ダイヤモンド鉱石':
    case 'ダイヤモンドこうせき':
    case 'ダイヤモンドの原石':
    case 'DiamondOre':
    case 'diamondore':
        $id = "56";
        break;

    case 'ダイヤモンドブロック':
    case 'ダイヤモンドのブロック':
    case 'ダイヤモンドの塊':
    case 'ダイヤモンドのかたまり':
    case 'DiamondBlock':
    case 'diamondblock':
        $id = "57";
        break;

    case '作業台':
    case 'ワークベンチ':
    case 'クラフトテーブル':
    case 'クラフト':
    case 'クラフティングテーブル':
    case 'クラフティング':
    case 'CraftingTable':
    case 'craftingtable':
        $id = "58";
        break;

    case '麦の苗':
    case '伸びた麦':
    case 'Crops':
    case 'crops':
        $id = "59";
        break;

    case '耕された土':
    case '畑の土':
    case '畑':
    case 'FarmLand':
    case 'farmland':
        $id = "60";
        break;

    case 'かまど':
    case 'カマド':
    case '釜戸':
    case '竃':
    case '焼くもの':
    case 'Furnace':
    case 'furnace':
        $id = "61";
        break;

    case '火の入ったかまど':
    case '火の入ったカマド':
    case '火の入った釜戸':
    case '火の入った竃':
    case '光っているかまど':
    case '光っているカマド':
    case '光っている釜戸':
    case '光っている竃':
    case '燃えているかまど':
    case '燃えているカマド':
    case '燃えている釜戸':
    case '燃えている竃':
    case 'BurningFurnace':
    case 'burningfurnace':
        $id = "62";
        break;

    case '立っている看板':
    case 'SignPost':
    case 'signpost':
        $id = "63";
        break;

    case '木のドアブロック':
    case '木製のドアブロック':
    case 'ドアブロック　木':
    case 'WoodenDoorBlock':
    case 'woodendoorblock':
        $id = "64";
        break;

    case 'ハシゴ':
    case 'はしご':
    case '梯子':
    case '梯':
    case 'Ladder':
    case 'ladder':
        $id = "65";
        break;

    case 'レール':
    case '普通のレール':
    case 'ノーマルレール':
    case 'Rail':
    case 'rail':
        $id = "66";
        break;

    case '丸石の階段':
    case '石の階段':
    case '石製の階段':
    case '階段　石':
    case 'CobblestoneStairs':
    case 'cobblestonestairs':
        $id = "67";
        break;

    case '壁看板':
    case '壁についている看板':
    case 'ウォール看板':
    case 'WallSign':
    case 'wallsign':
        $id = "68";
        break;

    case '鉄のドアブロック':
    case '鉄製のドアブロック':
    case '鉄ドアブロック':
    case 'IronDoorBlock':
    case 'irondoorblock':
        $id = "71";
        break;

    case 'レッドストーン鉱石':
    case 'レッドストーンの鉱石':
    case 'レッドストーンの原石':
    case 'RedstoneOre':
    case 'redstoneore':
        $id = "73";
        break;

    case '光っているレッドストーン鉱石':
    case '光ってるレッドストーン鉱石':
    case '光レッドストーン鉱石':
    case '光レッドストーンの原石':
    case 'GlowingRedstoneOre':
    case 'glowingredstoneore':
        $id = "74";
        break;

    case '雪':
    case '薄い雪':
    case '積もった雪':
    case 'SnowCover':
    case 'snowcover':
        $id = "78";
        break;

    case '氷':
    case 'アイス':
    case 'Ice':
    case 'ice':
        $id = "79";
        break;

    case '雪ブロック':
    case '雪のブロック':
    case '固めた雪':
    case '固形の雪':
    case 'Snow':
    case 'snow':
        $id = "80";
        break;

    case 'サボテン':
    case 'さぼてん':
    case '仙人掌':
    case '覇王樹':
    case 'Cactus':
    case 'cactus':
        $id = "81";
        break;

    case '粘土ブロック':
    case '固めた粘土':
    case '固形粘土':
    case 'ノーマル粘土':
    case 'Clay':
    case 'clay':
        $id = "82";
        break;

    case 'サトウキビの苗':
    case 'サトウキビ':
    case '砂糖黍':
    case 'SugerCane':
    case 'sugercane':
        $id = "83 or 338";
        break;

    case 'フェンス':
    case '柵':
    case '木の柵':
    case '木のフェンス':
    case 'Fence':
    case 'fence':
        $id = "85";
        $sub = "オーク → 85:0<br>
                松 → 85:1<br>
                白樺 → 85:2<br>
                ジャングル → 85:3<br>
                アカシア → 85:4<br>
                ダークオーク → 85:5<br>";
        break;

    case 'かぼちゃ':
    case 'カボチャ':
    case '南瓜':
    case 'パンプキン':
    case 'Pumpkin':
    case 'pumpkin':
        $id = "86";
        break;

    case 'ネザーラック':
    case 'ずっと燃える石':
    case 'ネザーの石':
    case 'Netherrack':
    case 'netherrack':
        $id = "87";
        break;

    case 'グロウストーン':
    case '光る石':
    case '光っている石':
    case '光ってる石':
    case 'Glowstone':
    case 'glowstone':
        $id = "89";
        break;

    case 'ジャックオランタン':
    case '光るかぼちゃ':
    case '光るカボチャ':
    case '光る南瓜':
    case '光っている南瓜':
    case '光っているかぼちゃ':
    case '光っているカボチャ':
    case '光ってるカボチャ':
    case '光ってるかぼちゃ':
    case '光ってる南瓜':
    case 'Jacko\'Lantern':
    case 'jacko\'lantern':
        $id = "91";
        break;

    case 'ケーキブロック':
    case 'CakeBlock':
    case 'cakeblock':
        $id = "92";
        break;

    case 'トラップドア':
    case 'トラップ':
    case 'タラップドア':
    case 'タラップ':
    case 'Trapdoor':
    case 'trapdoor':
        $id = "96";
        break;

    case '石レンガ':
    case '石レンガブロック':
    case 'StoneBrick':
    case 'stonebrick':
        $id = "98";
        break;

    case '茶色のキノコブロック':
    case '茶色いキノコブロック':
    case '茶いキノコブロック':
    case '茶キノコのブロック':
    case 'HugeBrownMushroom':
    case 'hugebrownmushroom':
        $id = "99";
        break;

    case '赤色のキノコブロック':
    case '赤いキノコブロック':
    case '赤キノコのブロック':
    case 'HugeRedMushroom':
    case 'hugeredmushroom':
        $id = "100";
        break;

    case '鉄格子':
    case '鉄柵':
    case '檻':
    case 'IronBars':
    case 'ironbars':
        $id = "101";
        break;

    case '板ガラス':
    case '薄いガラス':
    case '薄ガラス':
    case 'ガラスパネル':
    case 'GrallPane':
    case 'grallpane':
        $id = "102";
        break;

    case 'スイカブロック':
    case 'スイカ':
    case 'すいか':
    case '西瓜':
    case 'Melon':
    case 'melon':
        $id = "103";
        break;

    case 'かぼちゃの苗':
    case 'カボチャの苗':
    case '南瓜の苗':
    case 'PumpkinStem':
    case 'pumpkinstem':
        $id = "104";
        break;

    case 'すいかの苗':
    case 'スイカの苗':
    case '西瓜の苗':
    case 'MelonStem':
    case 'melonstem':
        $id = "105";
        break;

    case 'つた':
    case 'つる':
    case 'ツル':
    case 'ツタ':
    case '蔦':
    case '蔓':
    case 'Vines':
    case 'vines':
        $id = "106";
        break;

    case 'フェンスゲート':
    case 'ゲート':
    case '開くフェンス':
    case 'FenceGate':
    case 'fencegate':
        $id = "107";
        break;

    case 'レンガの階段':
    case '階段　レンガ':
    case 'BrickStairs':
    case 'brickstairs':
        $id = "108";
        break;

    case '石レンガの階段':
    case '階段　石レンガ':
    case 'StoneBrickStairs':
    case 'stonebrickstairs':
        $id = "109";
        break;

    case '菌糸ブロック':
    case '菌糸':
    case 'きんし':
    case 'キノコバイオーム':
    case 'Mycelium':
    case 'mycelium':
        $id = "110";
        break;

    case 'ハス':
    case 'はす':
    case '蓮':
    case '蓮の葉':
    case 'LilyPad':
    case 'lilypad':
        $id = "111";
        break;

    case 'ネザーレンガブロック':
    case 'ネザーのレンガブロック':
    case 'NetherBrick':
    case 'netherbrick':
        $id = "112";
        break;

    case 'ネザーレンガの階段':
    case 'ネザーレンガ階段':
    case 'ネザー階段':
    case 'ネザーの階段':
    case 'NetherBrickStairs':
    case 'netherbrickstairs':
        $id = "114";
        break;

    case 'エンドポータル':
    case 'エンドポータルフレーム':
    case 'ジエンド':
    case 'The End':
    case 'TheEnd':
    case 'the end':
    case 'theend':
    case 'EndPortalFrame':
    case 'endportalframe':
        $id = "120";
        break;

    case 'エンドストーン':
    case 'エンド石':
    case 'ジエンドの石':
    case 'TheEndの石':
    case 'theendの石':
    case 'EndStone':
    case 'endstone':
        $id = "121";
        break;

    case 'カカオ':
    case 'カカオ豆':
    case 'Cocoa':
    case 'cocoa':
        $id = "127";
        break;

    case '砂岩の階段':
    case '階段　砂岩':
    case '砂岩階段':
    case 'SandStoneStairs':
    case 'sandstonestairs':
        $id = "128";
        break;

    case 'エメラルド鉱石':
    case 'エメラルドの鉱石':
    case 'エメラルドの原石':
    case 'EmeraldOre':
    case 'emeraldore':
        $id = "129";
        break;

    case 'エメラルドブロック':
    case 'エメラルドのブロック':
    case 'エメラルド塊':
    case 'エメラルド塊':
    case 'BlockofEmerald':
    case 'blockofemerald':
        $id = "133";
        break;

    case '松の階段':
    case '松階段':
    case '階段　松':
    case 'SpruceWoodStairs':
    case 'sprucewoodstairs':
        $id = "134";
        break;

    case '白樺の階段':
    case '白樺階段':
    case '階段　白樺':
    case 'BrirchWoodStairs':
    case 'brirchwoodstairs':
        $id = "135";
        break;

    case 'ジャングルの階段':
    case 'ジャングル階段':
    case '階段　ジャングル':
    case 'JungleWoodStairs':
    case 'junglewoodstairs':
        $id = "136";
        break;

    case '石の壁':
    case '丸石の壁':
    case '石壁':
    case '丸石壁':
    case '砦':
    case 'とりで':
    case 'CobblestoneWall':
    case 'cobblestonewall':
        $id = "139";
        break;

    case '人参':
    case 'にんじん':
    case 'ニンジン':
    case 'Carrots':
    case 'carrots':
        $id = "141 or 391";
        break;

    case 'ポテト':
    case 'ぽてと':
    case 'じゃがいも':
    case 'ジャガイモ':
    case 'いも':
    case 'イモ':
    case '芋':
    case 'Potato':
    case 'potato':
        $id = "142 or 392";
        break;

    case 'ネザー水晶ブロック':
    case 'ネザー水晶のブロック':
    case 'ネザークウォーツのブロック':
    case 'ネザークウォーツブロック':
    case 'Quatz':
    case 'quatz':
        $id = "155";
        $sub = "ネザー水晶 → 155:0<br>
                模様入りのネザー水晶 → 155:1<br>
                縦線入りのネザー水晶 → 155:2<br>";
        break;

    case 'ネザー水晶の階段':
    case 'ネザー水晶階段':
    case 'ネザークウォーツの階段':
    case 'ネザークウォーツ階段':
    case 'QuatzStairs':
    case 'quatzstairs':
        $id = "156";
        break;

    case '重ねた木の半ブロック':
    case '２重半ブロック　木':
    case '２重の半ブロック　木':
    case 'WoodenDoubleSlab':
    case 'woodendoubleslab':
        $id = "157";
        break;

    case '木の半ブロック':
    case '半ブロック　木':
    case 'WoodenSlab':
    case 'woodenslab':
        $id = "158";
        break;

    case '色付粘土':
    case '色付き粘土':
    case '色付粘土ブロック':
    case '色付き粘土ブロック':
    case 'StainedClay':
    case 'stainedclay':
        $id = "159";
        $sub = "白 → 159:0<br>
                オレンジ → 159:1<br>
                マゼンタ → 159:2<br>
                水色 → 159:3<br>
                黄 → 159:4<br>
                黄緑 → 159:5<br>
                ピンク → 159:6<br>
                グレー → 159:7<br>
                ライトグレー → 159:8<br>
                シアン → 159:9<br>
                紫 → 159:10<br>
                青 → 159:11<br>
                茶色 → 159:12<br>
                緑 → 159:13<br>
                赤 → 159:14<br>
                黒 → 159:15<br>";
        break;

    case 'アカシアの階段':
    case 'アカシア階段':
    case '階段　アカシア':
    case 'AcasiaWoodStairs':
    case 'acasiawoodstairs':
        $id = "163";
        break;

    case 'ダークオークの階段':
    case 'ダークオーク階段':
    case '階段　ダークオーク':
    case 'DarkOakWoodStairs':
    case 'darkoakwoodstairs':
        $id = "164";
        break;

    case '干し草ブロック':
    case '干し草':
    case '麦俵':
    case 'HayBlock':
    case 'hayblock':
        $id = "170";
        break;

    case 'カーペット':
    case '絨毯':
    case 'じゅうたん':
    case 'Carpet':
    case 'carpet':
        $id = "171";
        $sub ="白 → 171:0<br>
                オレンジ → 171:1<br>
                マゼンタ → 171:2<br>
                水色 → 171:3<br>
                黄 → 171:4<br>
                黄緑 → 171:5<br>
                ピンク → 171:6<br>
                グレー → 171:7<br>
                ライトグレー → 171:8<br>
                シアン → 171:9<br>
                紫 → 171:10<br>
                青 → 171:11<br>
                茶色 → 171:12<br>
                緑 → 171:13<br>
                赤 → 171:14<br>
                黒 → 171:15<br>";
        break;

    case '堅焼き粘土':
    case '堅焼き粘土ブロック':
    case '堅焼粘土':
    case '堅焼粘土ブロック':
    case '固い粘土':
    case '固い粘土ブロック':
    case 'HardenedClay':
    case 'hardenedclay':
        $id = "172";
        break;

    case '石炭ブロック':
    case '石炭のブロック':
    case '石炭の塊':
    case 'BlockofCoal':
    case 'blockofcoal':
        $id = "173";
        break;

    case '氷':
    case '塊氷':
    case 'PackedIce':
    case 'packedice':
        $id = "174";
        break;

    case 'ポドゾル':
    case 'Podozol':
    case 'podozol':
        $id = "243";
        break;

    case 'ビート':
    case 'ビートの苗':
    case 'ビートの根':
    case 'Beetroot':
    case 'beetroot':
        $id = "244 or 457";
        break;

    case 'ストーンカッター':
    case '砕石機':
    case 'StoneCutter':
    case 'stonecutter':
        $id = "245";
        break;

    case '光ってる黒曜石':
    case '光っている黒曜石':
    case 'GlowingObsidian':
    case 'glowingobsidian':
    case '赤黒曜石':
        $id = "246";
        break;

    case 'ネザーリアクターコア':
    case 'ネザーリアクター':
    case 'ねざーりあくたー':
    case 'ネザー':
    case '仮ネザー':
    case 'NetherReactorCore':
    case 'netherreactorcore':
        $id = "247";
        break;

    case '鉄のシャベル':
    case '鉄シャベル':
    case 'シャベル　鉄':
    case 'IronShovel':
    case 'ironshovel':
        $id = "256";
        break;

    case '鉄のピッケル':
    case '鉄ピッケル':
    case '鉄ピ':
    case 'ピッケル　鉄':
    case 'IronPickaxe':
    case 'ironpickaxe':
        $id = "257";
        break;

    case '鉄の斧':
    case '鉄斧':
    case '斧　鉄':
    case 'IronAxe':
    case 'ironaxe':
        $id = "258";
        break;

    case '火打ち石':
    case 'FlintAndSteel':
    case 'flintandsteel':
        $id = "259";
        break;

    case 'りんご':
    case 'リンゴ':
    case '林檎':
    case '🍏':
    case '🍎':
    case 'Apple':
    case 'apple':
        $id = "260";
        break;

    case '弓':
    case 'Bow':
    case 'bow':
        $id = "261";
        break;

    case '矢':
    case 'や':
    case 'Arrow':
    case 'arrow':
        $id = "262";
        break;

    case '石炭':
    case 'Coal':
    case 'coal':
        $id = "263";
        $sub = "石炭 → 263:0<br>
                木炭 → 263:1<br>";
        break;

    case 'ダイヤモンド':
    case 'ダイヤ':
    case 'ダイア':
    case 'Diamond':
    case 'diamond':
        $id = "264";
        break;

    case '鉄インゴット':
    case '鉄のインゴット':
    case '鉄':
    case 'IronIngot':
    case 'ironingot':
        $id = "265";
        break;

    case '金インゴット':
    case '金のインゴット':
    case '金':
    case 'GoldIngot':
    case 'goldingot':
        $id = "266";
        break;

    case '鉄の剣':
    case '鉄剣':
    case '剣　鉄':
    case 'IronSword':
    case 'ironsword':
        $id = "267";
        break;

    case '木の剣':
    case '木剣':
    case '剣　木':
    case 'WoodenSword':
    case 'woodensword':
        $id = "268";
        break;

    case '木のシャベル':
    case '木シャベル':
    case 'シャベル　木':
    case 'WoodenShovel':
    case 'woodenshovel':
        $id = "269";
        break;

    case '木のピッケル':
    case '木ピッケル':
    case 'ピッケル　木':
    case 'WoodenPickaxe':
    case 'woodenpickaxe':
        $id = "270";
        break;

    case '木の斧':
    case '木斧':
    case '斧　木':
    case 'WoodenAxe':
    case 'woodenaxe':
        $id = "271";
        break;

    case '石の剣':
    case '石剣':
    case '剣　石':
    case 'StoneSword':
    case 'stonesword':
        $id = "272";
        break;

    case '石のシャベル':
    case '石シャベル':
    case 'シャベル　石':
    case 'StoneShovel':
    case 'stoneshovel':
        $id = "273";
        break;

    case '石のピッケル':
    case '石ピッケル':
    case '石ピ':
    case 'ピッケル　石':
    case 'StonePickaxe':
    case 'stonepickaxe':
        $id = "274";
        break;

    case '石の斧':
    case '石斧':
    case '斧　石':
    case 'StoneAxe':
    case 'stoneaxe':
        $id = "275";
        break;

    case 'ダイヤモンドの剣':
    case 'ダイヤモンド剣':
    case 'ダイヤの剣':
    case 'ダイヤ剣':
    case '剣　ダイヤモンド':
    case '剣　ダイヤ':
    case 'DiamondSword':
    case 'diamondsword':
        $id = "276";
        break;

    case 'ダイヤモンドのシャベル':
    case 'ダイヤのシャベル':
    case 'ダイヤモンドシャベル':
    case 'ダイヤシャベル':
    case 'シャベル　ダイヤモンド':
    case 'シャベル　ダイヤ':
    case 'DismondShovel':
    case 'dismondshovel':
        $id = "277";
        break;

    case 'ダイヤモンドのピッケル':
    case 'ダイヤのピッケル':
    case 'ダイヤモンドピッケル':
    case 'ダイヤピッケル':
    case 'ダイピ':
    case 'ピッケル　ダイヤモンド':
    case 'ピッケル　ダイヤ':
    case 'DiamondPickaxe':
    case 'diamondpickaxe':
        $id = "278";
        break;

    case 'ダイヤモンドの斧':
    case 'ダイヤの斧':
    case 'ダイヤモンド斧':
    case 'ダイヤ斧':
    case '斧　ダイヤモンド':
    case '斧　ダイヤ':
    case 'DiamondAxe':
    case 'diamondaxe':
        $id = "279";
        break;

    case '棒':
    case 'ぼう':
    case 'スティック':
    case 'Stick':
    case 'stick':
        $id = "280";
        break;

    case 'ボウル':
    case 'ボール':
    case '器':
    case 'うつわ':
    case 'Bowl':
    case 'bowl':
        $id = "281";
        break;

    case 'シチュー':
    case 'MushroomStew':
    case 'mushroomstew':
        $id = "282";
        break;

    case '金の剣':
    case 'ゴールドの剣':
    case 'ゴールド剣':
    case '金剣':
    case '剣　金':
    case '剣　ゴールド':
    case 'GoldSword':
    case 'goldsword':
        $id = "283";
        break;

    case '金のシャベル':
    case 'ゴールドのシャベル':
    case '金シャベル':
    case 'ゴールドシャベル':
    case 'シャベル　金':
    case 'シャベル　ゴールド':
    case 'GoldShovel':
    case 'goldshovel':
        $id = "284";
        break;

    case '金のピッケル':
    case 'ゴールドのピッケル':
    case '金ピッケル':
    case 'ゴールドピッケル':
    case '金ピ':
    case 'GoldPickaxe':
    case 'goldpickaxe':
        $id = "285";
        break;

    case '金の斧':
    case 'ゴールドの斧':
    case '金斧':
    case 'ゴールド斧':
    case 'GoldAxe':
    case 'goldaxe':
        $id = "286";
        break;

    case '糸':
    case 'くもの糸':
    case 'クモの糸':
    case '蜘蛛の糸':
    case 'String':
    case 'string':
        $id = "287";
        break;  

    case '羽':
    case 'はね':
    case 'Feather':
    case 'feather':
        $id = "288";
        break;

    case '火薬':
    case 'かやく':
    case 'Gumpowder':
    case 'gumpowder':
        $id = "289";
        break;

    case '木の鍬':
    case '木のクワ':
    case '木のくわ':
    case '木鍬':
    case '木クワ':
    case '木くわ':
    case '鍬　木':
    case 'クワ　木':
    case 'くわ　木':
    case 'WoodenHoe':
    case 'woodenhoe':
        $id = "290";
        break;

    case '石の鍬':
    case '石のクワ':
    case '石のくわ':
    case '石鍬':
    case '石クワ':
    case '石くわ':
    case '鍬　石':
    case 'クワ　石':
    case 'くわ　石':
    case 'StoneHoe':
    case 'stonehoe':
        $id = "291";
        break;

    case '鉄の鍬':
    case '鉄のクワ':
    case '鉄のくわ':
    case '鉄鍬':
    case '鉄クワ':
    case '鉄くわ':
    case '鍬　鉄':
    case 'クワ　鉄':
    case 'くわ　鉄':
    case 'IronHoe':
    case 'ironhoe':
        $id = "292";
        break;

    case 'ダイヤモンドの鍬':
    case 'ダイヤの鍬':
    case 'ダイヤモンドのクワ':
    case 'ダイヤのクワ':
    case 'ダイヤモンドのくわ':
    case 'ダイヤのくわ':
    case 'ダイヤモンド鍬':
    case 'ダイヤ鍬':
    case 'ダイヤモンドクワ':
    case 'ダイヤクワ':
    case 'ダイヤモンドくわ':
    case 'ダイヤくわ':
    case '鍬　ダイヤモンド':
    case '鍬　ダイヤ':
    case 'クワ　ダイヤモンド':
    case 'クワ　ダイヤ':
    case 'くわ　ダイヤモンド':
    case 'くわ　ダイヤ':
    case 'DiamondHoe':
    case 'diamondhoe':
        $id = "293";
        break;

    case '金の鍬':
    case 'ゴールドの鍬':
    case '金のクワ':
    case 'ゴールドのクワ':
    case '金のくわ':
    case 'ゴールドのくわ':
    case '金鍬':
    case 'ゴールド鍬':
    case '金クワ':
    case 'ゴールドクワ':
    case '金くわ':
    case 'ゴールドくわ':
    case '鍬　金':
    case '鍬　ゴールド':
    case 'クワ　金':
    case 'クワ　ゴールド':
    case 'くわ　金':
    case 'くわ　ゴールド':
    case 'GoldHoe':
    case 'goldhoe':
        $id = "294";
        break;

    case '種':
    case 'シード':
    case 'Seeds':
    case 'seeds':
        $id = "295";
        break;

    case '小麦':
    case 'Wheat':
    case 'wheat':
        $id = "296";
        break;

    case 'パン':
    case 'ぱん':
    case 'Bread':
    case 'bread':
        $id = "297";
        break;

    case '革装備':
        $id = "298,299,300,301";
        $sub = "ヘルメット → 298<br>
                チェストプレート → 299<br>
                レギンス → 300<br>
                ブーツ → 301<br>";
        break;

    case 'チェーン装備':
        $id = "302,303,304,305";
        $sub = "ヘルメット → 302<br>
                チェストプレート → 303<br>
                レギンス → 304<br>
                ブーツ → 305<br>";
        break;

    case '鉄装備':
        $id = "306,307,308,309";
        $sub = "ヘルメット → 306<br>
                チェストプレート → 307<br>
                レギンス → 308<br>
                ブーツ → 309<br>";
        break;

    case 'ダイヤモンド装備':
    case 'ダイヤ装備':
        $id = "310,311,312,313";
        $sub = "ヘルメット → 310<br>
                チェストプレート → 311<br>
                レギンス → 312<br>
                ブーツ → 313<br>";
        break;

    case '金装備':
        $id = "314,315,316,317";
        $sub = "ヘルメット → 314<br>
                チェストプレート → 315<br>
                レギンス → 316<br>
                ブーツ → 317<br>";
        break;

    case '火打石':
    case 'Flint':
    case 'flint':
        $id = "318";
        break;

    case '豚肉':
    case 'ブタ肉':
    case 'ぶた肉':
    case '生豚肉':
    case '生ブタ肉':
    case '生ぶた肉':
    case 'RawPorkchop':
    case 'rawporkchop':
        $id = "319";
        break;

    case '焼肉':
    case '焼き肉':
    case '焼き豚肉':
    case '焼きブタ肉':
    case 'CookedPorkchop':
    case 'cookedporkchop':
        $id = "320";
        break;

    case '絵':
    case '絵画':
    case 'Painting':
    case 'painting':
        $id = "321";
        break;

    case '看板':
    case 'Sign':
    case 'sign':
        $id = "323";
        break;

    case '木のドア':
    case '木製のドア':
    case 'ドア　木':
    case 'WoodenDoor':
    case 'woodendoor':
        $id = "324";
        break;

    case 'バケツ':
    case 'ばけつ':
    case 'Bucket':
    case 'bucket':
        $id = "325";
        break;

    case 'トロッコ':
    case 'マインカート':
    case 'Minecart':
    case 'minecart':
        $id = "328";
        break;

    case 'サドル':
    case '鞍':
    case 'Saddle':
    case 'saddle':
        $id = "329";
        break;

    case '鉄のドア':
    case '鉄製のドア':
    case 'ドア　鉄':
    case 'IronDoor':
    case 'irondoor':
        $id = "330";
        break;

    case 'レッドストーン':
    case 'レッドストーンダスト':
    case '赤石':
    case '赤い石':
    case 'Redstone':
    case 'redstone':
        $id = "331";
        break;

    case '雪玉':
    case 'Snowball':
    case 'snowball':
        $id = "332";
        break;

    case 'ボート':
    case '船':
    case 'Boat':
    case 'boat':
        $id = "333";
        break;

    case '革':
    case '牛の革':
    case 'Leather':
    case 'leather':
        $id = "334";
        break;

    case 'レンガ':
    case '粘土レンガ':
    case 'ClayBrick':
    case 'claybrick':
        $id = "336";
        break;

    case '粘土':
    case 'Clay':
    case 'clay':
        $id = "337";
        break;

    case '紙':
    case 'ペーパー':
    case 'Paper':
    case 'paper':
        $id = "339";
        break;

    case '本':
    case 'ブック':
    case 'Book':
    case 'book':
        $id = "340";
        break;

    case 'スライムボール':
    case 'Slimeball':
    case 'slimeball':
        $id = "341";
        break;

    case '卵':
    case 'たまご':
    case '玉子':
    case 'Egg':
    case 'egg':
        $id = "344";
        break;

    case 'コンパス':
    case 'Compass':
    case 'compass':
        $id = "345";
        break;

    case '時計':
    case 'ウォッチ':
    case 'Clock':
    case 'clock':
        $id = "347";
        break;

    case 'グロウストーンダスト':
    case 'グロウストーンの粉':
    case 'GlowstoneDust':
    case 'glowstonedust':
        $id = "348";
        break;

    case '染料':
    case '色つけ':
    case '骨粉':
    case 'Dye':
    case 'dye':
        $id = "351";
        $sub = "イカスミ → 351:0<br>
                赤 → 351:1<br>
                緑 → 351:2<br>
                ココアビーンズ → 351:3<br>
                ラピスラズリ → 351:4<br>
                紫 → 351:5<br>
                シアン → 351:6<br>
                ライトグレー → 351:7<br>
                グレー → 351:8<br>
                ピンク → 351:9<br>
                黄緑 → 351:10<br>
                黄 → 351:11<br>
                水色 → 351:12<br>
                マゼンタ → 351:13<br>
                オレンジ → 351:14<br>
                骨粉 → 351:15<br>";
        break;

    case '骨':
    case 'ほね':
    case 'ホネ':
    case 'ボーン':
    case 'Bone':
    case 'bone':
        $id = "352";
        break;

    case 'サトウ':
    case '砂糖':
    case 'Suger':
    case 'suger':
        $id = "353";
        break;

    case 'ケーキ':
    case 'Cake':
    case 'cake':
        $id = "354";
        break;

    case 'クッキー':
    case 'Cookie':
    case 'cookie':
        $id = "357";
        break;

    case 'ハサミ':
    case 'Shears':
    case 'shears':
        $id = "359";
        break;

    case '１切れのスイカ':
    case '１切れのすいか':
    case '１切れの西瓜':
    case 'MelonSlice':
    case 'melonslice':
        $id = "360";
        break;

    case 'かぼちゃの種':
    case 'カボチャの種':
    case '南瓜の種':
    case 'パンプキンの種':
    case 'PumpkinSeeds':
    case 'pumpkinseeds':
        $id = "361";
        break;

    case '西瓜の種':
    case 'すいかの種':
    case 'スイカの種':
    case 'MelonSeeds':
    case 'melonseeds':
        $id = "362";
        break;

    case '生牛肉':
    case '牛肉':
    case 'RawBeef':
    case 'rawbeef':
        $id = "363";
        break;

    case 'ステーキ':
    case '焼き牛肉':
    case '焼牛肉':
    case 'Steak':
    case 'steak':
        $id = "364";
        break;

    case '鶏肉':
    case '鳥肉':
    case '生鶏肉':
    case '生鳥肉':
    case 'RawChicken':
    case 'rawchicken':
        $id = "365";
        break;

    case '焼き鳥':
    case '焼鳥':
    case '焼いた鳥':
    case '焼いた鶏':
    case 'CookedChicken':
    case 'cookedchicken':
        $id = "366";
        break;

    case 'スポーンエッグ':
    case 'SpawnEgg':
    case 'spawnegg':
        $id = "383";
        $sub = "鶏 → 383:10<br>
                牛 → 383:11<br>
                豚 → 383:12<br>
                羊 → 383:13<br>
                狼 → 383:14<br>
                村人 → 383:15<br>
                ムーシュルーム → 383:16<br>
                ゾンビ → 383:32<br>
                クリーパー → 383:33<br>
                スケルトン → 383:34<br>
                クモ → 383:35<br>
                ゾンビピッグマン → 383:36<br>
                スライム → 383:37<br>
                エンダーマン → 383:38<br>
                シルバーフィッシュ → 383:39<br>";
        break;

    case 'エメラルド':
    case 'Emerald':
    case 'emerald':
        $id = "388";
        break;

    case 'ベークドポテト':
    case '焼いたポテト':
    case '調理されたポテト':
    case 'BakedPotato':
    case 'bakedpotato':
        $id = "393";
        break;

    case 'ネザーレンガ':
        $id = "405";
        break;

    case 'ネザー水晶':
    case 'NetherQuatz':
    case 'netherquatz':
        $id = "406";
        break;

    case 'ビートの種':
    case 'BeetSeeds':
    case 'beetseeds':
        $id = "458";
        break;

    case 'ビートスープ':
    case 'ビートのスープ':
    case 'BeetrootSoup':
    case 'beetrootsoup':
        $id = "459";
        break;


    case 'ドア':
    case 'どあ':
    case 'Door':
    case 'door':
        $id = "324 or 330";
        $sub = "木のドア → 324<br>
                鉄のドア → 330<br>";
        break;

/*ID*/
    case '1':
        $item = "焼き石";
        $sub = "焼き石 → 1:0<br>
                花崗岩 → 1:1<br>
                磨かれた花崗岩 → 1:2<br>
                閃緑岩 → 1:3<br>
                磨かれた閃緑岩 → 1:4<br>
                安山岩 → 1:5<br>
                磨かれた安山岩 → 1:6<br>";
        break;
    
    case '2':
        $item = "芝";
        break;
    
    case '3':
        $item = "土";
        break;
    
    case '4':
        $item = "丸石";
        break;
    
    case '5':
        $item = "木材";
        $sub = "オーク → 5:0<br>
                松 → 5:1<br>
                白樺 → 5:2<br>
                ジャングル → 5:3<br>
                アカシア → 5:4<br>
                ダークオーク → 5:5<br>";
        break;
    
    case '6':
        $item = "苗木";
        $sub = "オーク → 6:0<br>
                松 → 6:1<br>
                白樺 → 6:2<br>
                ジャングル → 6:3<br>
                アカシア → 6:4<br>
                ダークオーク → 6:5<br>";
        break;
    
    case '7':
        $item = "岩盤";
        break;
    
    case '8':
        $item = "水";
        break;
    
    case '9':
        $item = "流水";
        break;
    
    case '10':
        $item = "溶岩";
        break;
    
    case '11':
        $item = "流溶岩";
        break;
    
    case '12':
        $item = "砂";
        $sub = "砂 → 12:0<br>
                赤砂 → 12:1<br>";
        break;

    case '13':
        $item = "砂利";
        break;

    case '14':
        $item = "金鉱石";
        break;

    case '15':
        $item = "鉄鉱石";
        break;

    case '16':
        $item = "石炭鉱石";
        break;

    case '17':
        $item = "原木";
        $sub = "オーク → 17:0<br>
                松 → 17:1<br>
                白樺 → 17:2<br>
                ジャングル → 17:3<br>";
        break;

    case '18':
        $item = "葉";
        $sub = "オーク → 18:0<br>
                松 → 18:1<br>
                白樺 → 18:2<br>
                ジャングル → 18:3<br>";
        break;

    case '19':
        $item = "スポンジ";
        break;

    case '20':
        $item = "ガラス";
        break;

    case '21':
        $item = "ラピスラズリ鉱石";
        break;

    case '22':
        $item = "ラピスラズリブロック";
        break;

    case '24':
        $item = "砂岩";
        $sub = "砂岩 → 24:0<br>
                模様入りの砂岩 → 24:1<br>
                なめらかな砂岩 → 24:2<br>";
        break;

    case '26':
        $item = "ベット";
        break;

    case '27':
        $item = "パワードレール";
        break;

    case '30':
        $item = "蜘蛛の巣";
        break;

    case '31':
        $item = "高い草";
        $sub = "ノーマル → 31:1<br>
                ふぁさふぁさしたやつ → 31:2<br>";
        break;

    case '32':
        $item = "枯れた草";
        break;

    case '35':
        $item = "羊毛";
        $sub = "白 → 35:0<br>
                オレンジ → 35:1<br>
                マゼンタ → 35:2<br>
                水色 → 35:3<br>
                黄 → 35:4<br>
                黄緑 → 35:5<br>
                ピンク → 35:6<br>
                グレー → 35:7<br>
                ライトグレー → 35:8<br>
                シアン → 35:9<br>
                紫 → 35:10<br>
                青 → 35:11<br>
                茶色 → 35:12<br>
                緑 → 35:13<br>
                赤 → 35:14<br>
                黒 → 35:15<br>";
        break;

    case '37':
        $item = "黄色い花";
        break;

    case '38':
        $item = "ポピー";
        $sub = "ポピー → 38:0<br>
                青オーキッド → 38:1<br>
                アリウム → 38:2<br>
                紺碧 → 38:3<br>
                チューリップ（赤） → 38:4<br>
                チューリップ（オレンジ） → 38:5<br>
                チューリップ（白） → 38:6<br>
                チューリップ（ピンク） → 38:7<br>
                真ん中黄色くて花びら白いやつ → 38:8<br>";
        break;

    case '39':
        $item = "茶色のキノコ";
        break;

    case '40':
        $item = "赤色のキノコ";
        break;

    case '41':
        $item = "金ブロック";
        break;

    case '42':
        $item = "鉄ブロック";
        break;

    case '43':
        $item = "重ねた半ブロック（石）";
        break;

    case '44':
        $item = "石の半ブロック";
        $sub = "石 → 44:0<br>
                砂岩 → 44:1<br>
                木材 → 44:2<br>
                丸石 → 44:3<br>
                レンガ → 44:4<br>
                石レンガ → 44:5<br>
                ネザー水晶 → 44:6<br>
                石２ → 44:7<br>
                上にある石 → 44:8<br>
                上にある砂岩 → 44:9<br>
                上にある木材 → 44:10<br>
                上にある丸石 → 44:11<br>
                上にあるレンガ → 44:12<br>
                上にある石レンガ → 44:13<br>
                上にあるネザー水晶 → 44:14<br>
                上にある石２ → 44:15<br>";
        break;

    case '45':
        $item = "レンガブロック";
        break;

    case '46':
        $item = "TNT";
        break;

    case '47':
        $item = "本棚";
        break;

    case '48':
        $item = "苔石";
        break;

    case '49':
        $item = "黒曜石";
        break;

    case '50':
        $item = "松明";
        break;

    case '51':
        $item = "火";
        break;

    case '52':
        $item = "スポナー";
        break;

    case '53':
        $item = "木の階段ブロック";
        break;

    case '54':
        $item = "チェスト";
        break;

    case '56':
        $item = "ダイヤモンド鉱石";
        break;

    case '57':
        $item = "ダイヤモンドブロック";
        break;

    case '58':
        $item = "作業台";
        break;

    case '59':
        $item = "麦の苗";
        break;

    case '60':
        $item = "耕された土";
        break;

    case '61':
        $item = "かまど";
        break;

    case '62':
        $item = "火の入ったかまど";
        break;

    case '63':
        $item = "立っている看板";
        break;

    case '64':
        $item = "木のドア";
        break;

    case '65':
        $item = "ハシゴ";
        break;

    case '66':
        $item = "レール";
        break;

    case '67':
        $item = "丸石の階段";
        break;

    case '68':
        $item = "壁についている看板";
        break;

    case '71':
        $item = "鉄のドア";
        break;

    case '73':
        $item = "レッドストーン鉱石";
        break;

    case '74':
        $item = "光っているレッドストーン鉱石";
        break;

    case '78':
        $item = "薄い雪";
        break;

    case '79':
        $item = "氷";
        break;

    case '80':
        $item = "雪";
        break;

    case '81':
        $item = "サボテン";
        break;

    case '82':
        $item = "粘土ブロック";
        break;

    case '83':
        $item = "サトウキビ";
        break;

    case '85':
        $item = "柵";
        $sub = "オーク → 85:0<br>
                松 → 85:1<br>
                白樺 → 85:2<br>
                ジャングル → 85:3<br>
                アカシア → 85:4<br>
                ダークオーク → 85:5<br>";
        break;

    case '86':
        $item = "パンプキン";
        break;

    case '87':
        $item = "ネザーラック";
        break;

    case '89':
        $item = "グロウストーン";
        break;

    case '91':
        $item = "ジャックオランタン";
        break;

    case '92':
        $item = "ケーキ";
        break;

    case '96':
        $item = "トラップドア";
        break;

    case '98':
        $item = "石レンガ";
        break;

    case '99':
        $item = "茶色のキノコブロック";
        break;

    case '100':
        $item = "赤色のキノコブロック";
        break;

    case '101':
        $item = "鉄格子";
        break;

    case '102':
        $item = "板ガラス";
        break;

    case '103':
        $item = "スイカ";
        break;

    case '104':
        $item = "かぼちゃの苗";
        break;

    case '105':
        $item = "スイカの苗";
        break;

    case '106':
        $item = "つる";
        break;

    case '107':
        $item = "フェンスゲート";
        break;

    case '108':
        $item = "レンガの階段";
        break;

    case '109':
        $item = "石レンガの階段";
        break;

    case '110':
        $item = "菌糸ブロック";
        break;

    case '111':
        $item = "ハス";
        break;

    case '112':
        $item = "ネザーレンガブロック";
        break;

    case '114':
        $item = "ネザーレンガの階段";
        break;

    case '120':
        $item = "エンドポータルフレーム";
        break;

    case '121':
        $item = "エンドストーン";
        break;

    case '127':
        $item = "カカオ";
        break;

    case '128':
        $item = "砂岩の階段";
        break;

    case '129':
        $item = "エメラルド鉱石";
        break;

    case '133':
        $item = "エメラルドブロック";
        break;

    case '134':
        $item = "松の階段";
        break;

    case '135':
        $item = "白樺の階段";
        break;

    case '136':
        $item = "ジャングルの階段";
        break;

    case '139':
        $item = "丸石の壁";
        break;

    case '141':
        $item = "人参";
        break;

    case '142':
        $item = "ポテト";
        break;

    case '155':
        $item = "ネザー水晶ブロック";
        $sub = "ネザー水晶 → 155:0<br>
                模様入りのネザー水晶 → 155:1<br>
                縦線入りのネザー水晶 → 155:2<br>";
        break;

    case '156':
        $item = "ネザー水晶の階段";
        break;

    case '157':
        $item = "重ねた半ブロック（木）";
        break;

    case '158':
        $item = "木の半ブロック";
        break;

    case '159':
        $item = "白色の粘土";
        $sub = "白 → 159:0<br>
                オレンジ → 159:1<br>
                マゼンタ → 159:2<br>
                水色 → 159:3<br>
                黄 → 159:4<br>
                黄緑 → 159:5<br>
                ピンク → 159:6<br>
                グレー → 159:7<br>
                ライトグレー → 159:8<br>
                シアン → 159:9<br>
                紫 → 159:10<br>
                青 → 159:11<br>
                茶色 → 159:12<br>
                緑 → 159:13<br>
                赤 → 159:14<br>
                黒 → 159:15<br>";
        break;

    case '163':
        $item = "アカシアの階段";
        break;

    case '164':
        $item = "ダークオークの階段";
        break;

    case '170':
        $item = "麦俵";
        break;

    case '171':
        $item = "カーペット";
        $sub ="白 → 171:0<br>
                オレンジ → 171:1<br>
                マゼンタ → 171:2<br>
                水色 → 171:3<br>
                黄 → 171:4<br>
                黄緑 → 171:5<br>
                ピンク → 171:6<br>
                グレー → 171:7<br>
                ライトグレー → 171:8<br>
                シアン → 171:9<br>
                紫 → 171:10<br>
                青 → 171:11<br>
                茶色 → 171:12<br>
                緑 → 171:13<br>
                赤 → 171:14<br>
                黒 → 171:15<br>";
        break;

    case '172':
        $item = "堅焼き粘土";
        break;

    case '173':
        $item = "石炭ブロック";
        break;

    case '174':
        $item = "氷２";
        break;

    case '243':
        $item = "ポドゾル";
        break;

    case '244':
        $item = "ビートの苗";
        break;

    case '245':
        $item = "ストーンカッター";
        break;

    case '246':
        $item = "光ってる黒曜石";
        break;

    case '247':
        $item = "ネザーリアクターコア";
        break;

    case '256':
        $item = "鉄のシャベル";
        break;

    case '257':
        $item = "鉄のピッケル";
        break;

    case '258':
        $item = "鉄の斧";
        break;

    case '259':
        $item = "火打ち石";
        break;

    case '260':
        $item = "りんご";
        break;

    case '261':
        $item = "弓";
        break;

    case '262':
        $item = "矢";
        break;

    case '263':
        $item = "石炭";
        $sub = "石炭 → 263:0<br>
                木炭 → 263:1<br>";
        break;

    case '264':
        $item = "ダイヤモンド";
        break;

    case '265':
        $item = "鉄インゴット";
        break;

    case '266':
        $item = "金インゴット";
        break;

    case '267':
        $item = "鉄の剣";
        break;

    case '268':
        $item = "木の剣";
        break;

    case '269':
        $item = "木のシャベル";
        break;

    case '270':
        $item = "木のピッケル";
        break;

    case '271':
        $item = "木の斧";
        break;

    case '272':
        $item = "石の剣";
        break;

    case '273':
        $item = "石のシャベル";
        break;

    case '274':
        $item = "石のピッケル";
        break;

    case '275':
        $item = "石の斧";
        break;

    case '276':
        $item = "ダイヤモンドの剣";
        break;

    case '277':
        $item = "ダイヤモンドのシャベル";
        break;

    case '278':
        $item = "ダイヤモンドのピッケル";
        break;

    case '279':
        $item = "ダイヤモンドの斧";
        break;

    case '280':
        $item = "棒";
        break;

    case '281':
        $item = "ボウル";
        break;

    case '282':
        $item = "シチュー";
        break;

    case '283':
        $item = "金の剣";
        break;

    case '284':
        $item = "金のシャベル";
        break;

    case '285':
        $item = "金のピッケル";
        break;

    case '286':
        $item = "金の斧";
        break;

    case '287':
        $item = "糸";
        break;

    case '288':
        $item = "羽";
        break;

    case '289':
        $item = "火薬";
        break;

    case '290':
        $item = "木の鍬";
        break;

    case '291':
        $item = "石の鍬";
        break;

    case '292':
        $item = "鉄の鍬";
        break;

    case '293':
        $item = "ダイヤモンドの鍬";
        break;

    case '294':
        $item = "金の鍬";
        break;

    case '295':
        $item = "種";
        break;

    case '296':
        $item = "麦";
        break;

    case '297':
        $item = "パン";
        break;

    case '298':
        $item = "革のヘルメット";
        break;

    case '299':
        $item = "革のチェストプレート";
        break;

    case '300':
        $item = "革のパンツ";
        break;

    case '301':
        $item = "革のブーツ";
        break;

    case '302':
        $item = "チェーンヘルメット";
        break;

    case '303':
        $item = "チェーンチェストプレート";
        break;

    case '304':
        $item = "チェーンレギンス";
        break;

    case '305':
        $item = "チェーンブーツ";
        break;

    case '306':
        $item = "鉄のヘルメット";
        break;

    case '307':
        $item = "鉄のチェストプレート";
        break;

    case '308':
        $item = "鉄のレギンス";
        break;

    case '309':
        $item = "鉄のブーツ";
        break;

    case '310':
        $item = "ダイヤモンドヘルメット";
        break;

    case '311':
        $item = "ダイヤモンドのチェストプレート";
        break;

    case '312':
        $item = "ダイヤモンドのレギンス";
        break;

    case '313':
        $item = "ダイヤモンドのブーツ";
        break;

    case '314':
        $item = "金のヘルメット";
        break;

    case '315':
        $item = "金のチェストプレート";
        break;

    case '316':
        $item = "金のレギンス";
        break;

    case '317':
        $item = "金のブーツ";
        break;

    case '318':
        $item = "火打石";
        break;

    case '319':
        $item = "豚肉";
        break;

    case '320':
        $item = "焼豚肉";
        break;

    case '321':
        $item = "絵画";
        break;

    case '323':
        $item = "看板";
        break;

    case '324':
        $item = "木のドア";
        break;

    case '325':
        $item = "バケツ";
        break;

    case '328':
        $item = "トロッコ";
        break;

    case '329':
        $item = "サドル";
        break;

    case '330':
        $item = "鉄のドア";
        break;

    case '331':
        $item = "レッドストーン";
        break;

    case '332':
        $item = "雪玉";
        break;

    case '333':
        $item = "ボート";
        break;

    case '334':
        $item = "革";
        break;

    case '336':
        $item = "レンガ";
        break;

    case '337':
        $item = "粘土";
        break;

    case '338':
        $item = "サトウキビ";
        break;

    case '339':
        $item = "紙";
        break;

    case '340':
        $item = "本";
        break;

    case '341':
        $item = "スライムボール";
        break;

    case '342':
        $item = "卵";
        break;

    case '345':
        $item = "コンパス";
        break;

    case '347':
        $item = "時計";
        break;

    case '348':
        $item = "グロウストーンダスト";
        break;

    case '351':
        $item = "染料";
        $sub = "イカスミ → 351:0<br>
                赤 → 351:1<br>
                緑 → 351:2<br>
                ココアビーンズ → 351:3<br>
                ラピスラズリ → 351:4<br>
                紫 → 351:5<br>
                シアン → 351:6<br>
                ライトグレー → 351:7<br>
                グレー → 351:8<br>
                ピンク → 351:9<br>
                黄緑 → 351:10<br>
                黄 → 351:11<br>
                水色 → 351:12<br>
                マゼンタ → 351:13<br>
                オレンジ → 351:14<br>
                骨粉 → 351:15<br>";
        break;

    case '352':
        $item = "骨";
        break;

    case '353':
        $item = "砂糖";
        break;

    case '354':
        $item = "ケーキ";
        break;

    case '355':
        $item = "ベット";
        break;

    case '357':
        $item = "クッキー";
        break;

    case '359':
        $item = "ハサミ";
        break;

    case '360':
        $item = "メロンスライス";
        break;

    case '361':
        $item = "かぼちゃの種";
        break;

    case '362':
        $item = "スイカの種";
        break;

    case '363':
        $item = "牛肉";
        break;

    case '364':
        $item = "ステーキ";
        break;

    case '365':
        $item = "鶏肉";
        break;

    case '366':
        $item = "焼き鳥肉";
        break;

    case '383':
        $item = "スポーンエッグ";
        $sub = "鶏 → 383:10<br>
                牛 → 383:11<br>
                豚 → 383:12<br>
                羊 → 383:13<br>
                狼 → 383:14<br>
                村人 → 383:15<br>
                ムーシュルーム → 383:16<br>
                ゾンビ → 383:32<br>
                クリーパー → 383:33<br>
                スケルトン → 383:34<br>
                クモ → 383:35<br>
                ゾンビピッグマン → 383:36<br>
                スライム → 383:37<br>
                エンダーマン → 383:38<br>
                シルバーフィッシュ → 383:39<br>";
        break;

    case '388':
        $item = "エメラルド";
        break;

    case '391':
        $item = "人参";
        break;

    case '392':
        $item = "ポテト";
        break;

    case '393':
        $item = "ベークドポテト";
        break;

    case '405':
        $item = "ネザーレンガ";
        break;

    case '406':
        $item = "ネザー水晶";
        break;

    case '457':
        $item = "ビート";
        break;

    case '458':
        $item = "ビートの種";
        break;

    case '459':
        $item = "ビートスープ";
        break;

    default:
        $id = "____";
        break;
}