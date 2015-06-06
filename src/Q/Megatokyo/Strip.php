<?php

namespace Q\Megatokyo;

class Strip
{
    /*
     * 名詞翻譯表
     * Piro: 畢羅
     * Largo: 拉爾戈
     * Hayasaka Erika: 早坂 えりか（早坂 繪理香）
     * Nanasawa Kimiko: 七澤 希美子
     * Tohya Miho: 凍耶 美穂
     * Seraphim: 賽菈弗
     * Junpei: 淳平
     * Sonoda Yuki: 園田 由紀
     * Tsubasa: 小翼..是個男人啊...
     */

    static $all = [
        //1
        ["2000-08-14", Chapter::C0, "惡夢開始","<p>Largo 的 T-Shirt 是絕冬城之夜+無盡的任務，Piro則是 Konami"],
        ["2000-08-16", Chapter::C0, "再會吾友"],
        ["2000-08-18", Chapter::C0, "痛失吾友"],
        ["2000-08-21", Chapter::C0, "BioWare 男孩"],
        ["2000-08-23", Chapter::C0, "入迷","<p>海報中的人物是日本戀愛遊戲 ToHeat 的女主角神岸明（神岸あかり）。"],
        ["2000-08-25", Chapter::C0, "Ion Storm 專用出口","<p>約翰．羅梅洛（John Romero）遊戲開發公司 id Software與 Ion Storm 的創辦人之一。前者是遊戲史上最成功的公司之一，後者則是遊戲史上最知名的失敗公司之一。"],
        ["2000-08-28", Chapter::C0, "流亡"],
        ["2000-08-30", Chapter::C0, "不好的回憶"],
        ["2000-09-01", Chapter::C0, "誰會說 l33t?","<p>l33t = leet，美式火星文。<dl><dt>The pain!!!</dt><dd>（喊痛）</dd><dt>Eye need help!</dt><dd>我需要幫忙</dd><dt>Eye need joo to gatz da doctor. Eye gotz some bad pain in ma chest, I need my pills.</dt><dd>我需要找醫生，我胸口很痛，得要吃藥。</dd><dt>jo</dt><dd>（打招呼）</dd></dl>"],
        ["2000-09-04", Chapter::C0, "沒有護照","<p>其實 Mortal Kombat 中文是真人快打，不過字面上來說是生死格鬥沒錯。"],
        
        //11
        ["2000-09-06", Chapter::C0, "回不了家"],
        ["2000-09-08", Chapter::C0, "公園長椅","<p>絕冬城之夜在 2000、2001、2002 的 E3 展都拿下最佳 RPG 頭銜，於 2002 年上市。<p>「With You 〜みつめていたい〜」是1998年上市的18禁戀愛遊戲，雖然有大量的女性角色，但只有兩位女主角可以攻略。<p>…等一下，Piro你在飛機上玩18x遊戲！？"],
        ["2000-09-11", Chapter::NNM, "Cosplay 藍調","<p>有看過機動戰艦 Nadesico 的人，相信會對這個橋段感到非常熟悉。<p>另，Piro的角色外型原本就是以星野琉璃為樣本來設計的。"],
        ["2000-09-13", Chapter::C0, "Moo Moo"],
        ["2000-09-15", Chapter::C0, "爆炸了"],
        ["2000-09-18", Chapter::C0, "輾過去","<p>AIR 是著名戀愛遊戲，於 2000 年九月（這一話上線前不久）發售，神尾觀玲是遊戲中的女主角。"],
        ["2000-09-20", Chapter::C0, "一手搞定"],
        ["2000-09-22", Chapter::C0, "東京電玩展"],
        ["2000-09-25", Chapter::C0, "模擬人生"],
        ["2000-09-27", Chapter::C0, "特攻神諜","<p>特攻神諜（Metal Gear Solid）是PS2平台上的一款動作遊戲。不過這遊戲現在叫做潛龍諜影。"],
        
        //21
        ["2000-09-29", Chapter::C0, "力回饋機制","<p>是的，又一款戀愛遊戲。不過青澀之戀二其實沒有這種功能。"],
        ["2000-10-02", Chapter::DPD, "畢羅今天死翹翹"],
        ["2000-10-04", Chapter::C0, "展場女郎好危險"],
        ["2000-10-06", Chapter::C0, "只有一點點"],
        ["2000-10-09", Chapter::C0, "帶走他們","<p>Pia Carrot 是一系列的戀愛遊戲，一般認為女僕咖啡店的風氣是這款遊戲所帶起。<p>不過有 Pia Carrot 2.5（遊戲），也有 Pia Carrot 2 DX（OVA動畫），就是沒有 Pia Carrot 2.5 Super DX…"],
        ["2000-10-11", Chapter::C0, "給我些硬幣"],
        ["2000-10-13", Chapter::DPD, "畢羅陣亡日","<p>Piro 頭上那隻貓也叫做 Piro，出自戀愛遊戲 Kanon。"],
        ["2000-10-16", Chapter::C0, "安娜米勒","<p>安娜米勒（Anna Miller's）是日本的連鎖餐廳，以其（十分強調胸部的）制服出名。Denny's則是美國的知名連鎖餐廳。"],
        ["2000-10-18", Chapter::C0, "咖啡壺"],
        ["2000-10-20", Chapter::OSE, "NG特輯","<p>Daily Radar是一個網站的名字。"],
    
        //31
        ["2000-10-23", Chapter::SGD, "下不為例"],
        ["2000-10-25", Chapter::C0, "調整"],
        ["2000-10-27", Chapter::OSE, "新力地獄"],
        ["2000-10-30", Chapter::C0, "家的感覺"],
        ["2000-11-01", Chapter::C0, "爛地板"],
        ["2000-11-03", Chapter::C0, "就寢"],
        ["2000-11-06", Chapter::C0, "六個星期"],
        ["2000-11-08", Chapter::C0, "Gamers 拿走了我們的啤酒錢","<p>Gamers 是販賣動漫相關商品的知名連鎖店，總部在秋葉原。"],
        ["2000-11-10", Chapter::OSE, "社工","<p>Seraphim 是當時作者 Fred 女朋友的化身，兩人在2004年結婚。"],
        ["2000-11-13", Chapter::C0, "殺手"],
    
        //41
        ["2000-11-15", Chapter::C0, "離家咫尺"],
        ["2000-11-17", Chapter::C0, "別製造毒品"],
        ["2000-11-20", Chapter::C0, "少女漫畫是心海羅盤"],
        ["2000-11-22", Chapter::C0, "可愛的女孩"],
        ["2000-11-24", Chapter::SGD, "襯衫男德姆：緊急抽象藝術日"],
        ["2000-11-27", Chapter::C0, "逃跑"],
        ["2000-11-29", Chapter::C0, "泡泡襪"],
        ["2000-12-01", Chapter::C0, "設定如此"],
        ["2000-12-04", Chapter::C0, "我發誓會當個好孩子"],
        ["2000-12-06", Chapter::OSE, "言猶在耳","<p>永遠的毀滅公爵從1997年開始研發，經過一連串的歷史之後於2011年上市。"],
    
        //51
        ["2000-12-08", Chapter::NNM, "大東京的為什麼：如果說…"],
        ["2000-12-11", Chapter::C0, "幫我帶啤酒回來","<p>Napple Tale是2000年發行在 Dream Cast 上的遊戲，音樂擔當是菅野洋子，女主角與主題曲演唱是坂本真綾。<p>Candyland 是一款針對學齡前兒童的桌上遊戲。"],
        ["2000-12-13", Chapter::C0, "噗啾～噗啾～","<p>第二格的布娃娃外星人出自迷糊女戰士（Excel Saga），第三格則是家有阿福（Alf）"],
        ["2000-12-15", Chapter::C0, "這可不能給老爸看到"],
        ["2000-12-18", Chapter::C0, "良心建議"],
        ["2000-12-20", Chapter::C0, "威脅恐嚇"],
        ["2000-12-22", Chapter::OSE, "長椅","<p>長椅（The Bench）是2000年到2001年連載的網路漫畫。主角的服裝跟這回 Piro 和 Largo 穿的一模一樣。<p>坦白說，我看不懂這一回在 WANG 甚麼…"],
        ["2000-12-25", Chapter::OSE, "新年快樂",'<p>就是下面這首歌</p><iframe width="420" height="315" src="http://www.youtube.com/embed/Pv0hlbWpa1w" frameborder="0" allowfullscreen></iframe>'],
        ["2000-12-27", Chapter::C0, "打爆你","<p>原文的 l33t 被我改成「屌」，ownz'ed 翻成「打爆」。我討厭翻譯火星文，不過後面有的翻了..."],
        ["2000-12-29", Chapter::OSE, "網路漫畫","<p>這篇全是網路漫畫角色，不過我都忘記出處了..."],
        
        //61
        ["2001-01-01", Chapter::C0, "電車情書","<p>原文標題是「You've got Rail」，<a href='http://en.wikipedia.org/wiki/You've_Got_Mail'>電子情書</a>的標題則是「You've get Mail」"],
        ["2001-01-03", Chapter::C0, "當畢羅遇上希美子","<p>標題的哽是「<a href='http://zh.wikipedia.org/wiki/%E7%95%B6%E5%93%88%E5%88%A9%E7%A2%B0%E4%B8%8A%E8%8E%8E%E8%8E%89'>當哈利遇上莎莉</a>」"],
        ["2001-01-05", Chapter::C0, "先生？"],
        ["2001-01-08", Chapter::OSE, "超科學戲院三千","<p>這回的標題哽來自於「<a href='http://en.wikipedia.org/wiki/Mystery_Science_Theater_3000'>Mystery Science Theatre 3000</a>」"],
        ["2001-01-10", Chapter::SGD, "Dom Day 3", "<p>第三格中的日期看來是在指<a href='/strip/45'>第45回連載</a><p>查爾斯·舒茲是 Snoopy 的作者"],
        ["2001-01-12", Chapter::OSE, "Bioware 的維修站","<p>Crash 可以指撞車，也可以指程式當掉。在這裡是個雙關語。"],
        ["2001-01-15", Chapter::C0, "存檔點","<p>背景人物是 <a href='http://zh.wikipedia.org/zh-tw/Kanon'>Kanon</a> 的月宮亞由，照例的想吃鯛魚燒然後摔倒..."],
        ["2001-01-17", Chapter::C0, "麥克風開著嗎？"],
        ["2001-01-19", Chapter::OSE, "婆媽劇"],
        ["2001-01-22", Chapter::C0, "裸體神技","<p>脫衣避靜電的點子來自於<a href='http://zh.wikipedia.org/zh-tw/%E7%8E%B2%E9%9F%B3'>玲音</a>，不過玲音本人沒脫那麼誇張"],
        
        //71
        ["2001-01-24", Chapter::C0, "真遺憾"],
        ["2001-01-26", Chapter::C0, "男人都是..."],
        ["2001-01-29", Chapter::C0, "八扇之音","原文標題 The sound of eight fans 哽疑似跟某樂團有關，不確定..."],
        ["2001-01-31", Chapter::C0, "恍神之鎚", "<p>B4K4 = BAKA = 日文的「笨蛋」。<p>最後拉爾戈跟畢羅說的是「You are so <a href='https://www.google.com.tw/search?q=fsck'>fscking</a> dead」<p>好久沒玩雷神之錘了..."],
        ["2001-02-02", Chapter::C0, "Mr. Piro-san", "<p><a href='http://tinami.com'>tinami.com</a> 是個繪圖發佈網站。然後由紀你哪來「貓咪喵喵」這種神奇的 e-mail 地址..."],
        ["2001-02-06", Chapter::GUEST, "客座繪：little gamers","<p>這次是 <a href='http://www.little-gamers.com/'>Little Gamers</a> 的協力客座繪。"],
        ["2001-02-07", Chapter::C0, "差一點點","<p><a href='https://en.wikipedia.org/wiki/Temptation_Island_%28TV_series%29'>Temptation Island</a> 是個 2001 年的實境節目，內容大致上是「把一群情侶兩兩分開放到風光明媚的而且都是異性的島生活，強迫他們跟其他異性交往」<p>我覺得規劃這種節目的人還比較沒道德就是了..."],
        ["2001-01-17", Chapter::GUEST, "客座繪：Real Life Comics", "<p>這次是 <a href='http://www.reallifecomics.com/'>Real Life Comics</a> 的協力客座繪。"],
//      ["2001-01-19", Chapter::OSE, "婆媽劇"],
//      ["2001-01-22", Chapter::C0, "裸體神技","<p>脫衣避靜電的點子來自於<a href='http://zh.wikipedia.org/zh-tw/%E7%8E%B2%E9%9F%B3'>玲音</a>，不過玲音本人沒脫那麼誇張"],
    ];

    public static function get($id)
    {
        $idx = $id - 1;
        if (!isset(static::$all[$idx])) {
            return null;
        }

        $s = static::$all[$idx];

        $img = sprintf(
            "/img/%02d/%04d.png",
            $id / 100,
            $id
        );
        return [
            'id' => $id,
            'date' => $s[0],
            'chapter' => $s[1],
            'title' => $s[2],
            'img' => $img,
            'comment' => isset($s[3]) ? $s[3] : null,
        ];
    }

    public static function max()
    {
        return count(static::$all);
    }
}