<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Demolishing Strongholds', 
                'blurb' => '<p>David shares insights drawn from many years of personal experience in helping people break free from strongholds that have bound them. In this no-nonsense guide, he gives us effective strategies for spiritual warfare which include:</p><ul><li>Having a biblical model for understanding the enemy’s strategies and dealing with them.</li><li>Keeping a balance between the reality of Satan and the demonic realm, our responsibility for our actions, and the absolute sovereignty of God.</li><li>Understanding that strongholds are wrong thinking, and learning to use Godly power to pull them down.</li><li>Understanding our authority in Christ.</li><li>Knowing our weapons and using them.</li></ul><p>"A book full of biblical shocks and surprises that God has owned to cause all heaven (and hell!) to break loose and set thousands free." - <em>Greg Haslam, Senior Pastor, Winchester Family Church</em></p>',
                'img' => 'https://daviddevenish.com/wp-content/uploads/2016/07/strongholds.jpg',
                'amzuk' => 'https://www.amazon.co.uk/Demolishing-Strongholds-David-Devenish/dp/1860248012/ref=sr_1_1?ie=UTF8&qid=1470748633&sr=8-1&keywords=demolishing+strongholds',
                'amzus' => 'https://www.amazon.com/Demolishing-Strongholds-David-Devenish-ebook/dp/B00J2BHAEM/ref=sr_1_1?s=digital-text&ie=UTF8&qid=1483455268&sr=1-1',
            ],
            [
                'title' => 'What on Earth is the Church For?: A Blueprint for the Future for Church-based Mission and Social Action', 
                'blurb' => '<p>David believes that the church exists as a means of taking the gospel message to every people group. He believes that the church is very much at the center of God’s purposes, and in this book presents the church, not as a static pastoral community, but as a vibrant, active body totally committed to world mission. David investigates the importance of church planting to reach the nations and looks at Church-based mission and how to make local churches “missional” in both thinking and practice. Set within a framework of the Kingdom of God, David demonstrates what the “Kingdom down to earth” really implies for Church-based Kingdom social action. Finally, David examines the culture and contextualisation of social action along with some of the dangers and difficulties of apostolic mission, before asking the fundamental question, “Who will go?”</p><p>"Thoroughly rooted in biblical revelation and illustrated by very telling and up-to-date stories from churches around the world, it challenges the modern Christian to think again about the vital role of the local church in the ultimate fulfillment of the great commission" - <em>Terry Virgo, Founder of Newfrontiers</em></p>',
                'img' => 'https://daviddevenish.com/wp-content/uploads/2016/07/what-on-earth.jpg',
                'amzuk' => 'https://www.amazon.co.uk/What-Earth-Church-Blueprint-Church-based/dp/1860245374/ref=pd_sim_14_4?ie=UTF8&dpID=41Q1T8588ML&dpSrc=sims&preST=_AC_UL160_SR105%2C160_&psc=1&refRID=JDJQ6YVZ6H3967Q2Y8Q5',
                'amzus' => 'https://www.amazon.com/What-Earth-Church-David-Devenish-ebook/dp/B00J2AGR10/ref=sr_1_3?s=digital-text&ie=UTF8&qid=1483455298&sr=1-3',
            ],
        ]);
    }
}
