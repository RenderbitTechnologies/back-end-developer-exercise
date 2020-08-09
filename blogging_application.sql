-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 09:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogging_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `title`, `email`, `image`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Krystal', 'How Losing Your Sense of Smell Changes Your Relationship With Food', 'krys@gmail.com', 'about.jpg', 'Like many people, I grew up savoring the smell of baking bread and simmering stews. When I started cooking, I learned to rely on scent—the first carbonic hint of a char, the ranked notes of a properly prepared spice blend. The more I thought critically about what I ate over the years, largely in order to figure out how to write about food, the more I picked up on and started to talk about food in terms of ingredients’ aromas. But I never actually thought about just how deeply scent guided my relationship with food until, a few years ago, I started slowly losing my sense of smell.\r\n\r\nThough few people are born with a congenital lack of smell, it’s more common to lose this sense, at least partially and temporarily, than you might think. Smell loss is a common side effect of everything from head injuries and neurological disorders—the likely culprit behind my own smell loss—to certain medications or therapies, which mess with receptors in your nasal passageways or the nerve sending signals from them to your brain. Respiratory infections as basic as common colds or as severe as COVID-19 can knock out smell as well. Smell loss is even a routine part of aging for many, as nasal receptors suffer constant damage from environmental irritants and toxins and require constant replacement, a maintenance task our bodies get worse at over time. Several studies conducted in recent decades suggest that as many as one in five adults are dealing with some degree of smell loss at any given time—three in five, if we’re talking people over age 80.\r\n\r\nDespite the prevalence of this issue, there’s shockingly little comprehensive information out there for those of us trying to grasp what our loss will mean for our lives in the kitchen and at our tables and how to navigate those changes. In an effort to rectify that, I reached out to a number of leading smell and taste researchers, as well as smell-loss advocates, to figure out what we currently do—and don’t—know about the effect of smell loss on our relationships with food.\r\n\r\nOur sense of taste, which we detect using buds on our tongues, soft palates, and upper esophagi, is blunt and basic on its own—a tool for detecting presences and levels of bitterness, saltiness, sourness, sweetness, and umami. Smell is more complex. There’s lively debate among scientists about just how many distinct scents humans can pick up with estimates ranging from 10,000 to one trillion. But we know that the aromatic compounds we detect through our noses and the openings to our nasal passageways at the back of our mouths give most foods many of their unique flavors. Many researchers insist that smell makes up 80 to 90 percent of every food’s flavor.\r\n\r\nWithout scent, these statistics often seem to imply, foods lose their color and character. Carl Philpott, an expert on smell disorders at the University of East Anglia, has even gone so far as to liken eating without a sense of smell to “chewing cardboard,” a joyless self-maintenance chore.\r\n\r\nStudies on people with smell loss do suggest that many find less joy and satisfaction in food than their smell-intact peers. “About 50 percent of people gain weight after they lose their senses of smell,” says Alan Hirsch of the Smell and Taste Treatment and Research Foundation, one of the few clinics in the world that focuses on smell loss, because they go wild on unhealthy foods rich in fats and sugars, desperate to indulge in their remaining senses of true taste. “Alternatively, 15 percent lose weight because they become depressed about their smell loss and lose their desire to eat or because they don’t get positive reinforcement from food anymore and lose interest.”\r\n\r\n“This new relationship with food is not something I would wish on anyone,” says Chrissi Kelly, who lost her sense of smell in 2012 and now works with the smell-loss awareness and support organization Abscent. “It can be absolutely life-altering and have devastating consequences.”\r\n\r\nBut not everyone who suffers a loss of smell finds the experience equally traumatic or feels the same level of lost joy or satisfaction in their eating experiences. This makes sense, Hirsch and others say, as smell loss is not a monolithic experience. There are levels and shades to it.', 'Accepted', '2020-07-30 07:50:04', '2020-07-30 07:52:22'),
(2, 'Krystal', 'How to Build a Better Breakfast Burrito, Your Way', 'krys@gmail.com', 'bg_4.jpg', 'Here\'s a challenge for you: Try to define \"breakfast burrito\" without resorting to the tautology that it\'s a burrito one eats for breakfast. At this point, at least a few of you—perhaps many—are shouting out, \"It\'s the eggs that make it a breakfast burrito, stupid!\" And I\'d generally agree that you\'re right. But tell me: If someone rolled home fries and sausage in a flour tortilla, left out the eggs, and ate it as their first meal of the day, would you deny that they\'re eating a breakfast burrito? Or what if they used eggs but replaced the potatoes and sausage with refrieds and chorizo?\r\n\r\nI\'m being a little ridiculous, I know. My point isn\'t that there\'s no such thing as a breakfast burrito—I think we\'d all agree eggs and other items from the American breakfast table are key, along with components that nod to Southwestern/Tex-Mex/Mexican flavors—but rather that it\'s a culinary form with incredible range.\r\n\r\nThat\'s a good thing, because it means a breakfast burrito is a choose-your-own-adventure of comfort and flavor, and the possibilities are vast. But while I suppose one could roll some pancakes in a flour tortilla (or maybe better, roll some eggs inside a giant pancake) and dub it both \"breakfast\" and \"burrito,\" there are some helpful guidelines that, when followed —or broken with intent—will generally lead to a better breakfast burrito.\r\n\r\nHere\'s how to build yours.\r\n\r\nThe Breakfast Burrito Breakdown\r\nAs I\'ve already set out, I don\'t think there are many ingredients that absolutely must be in a breakfast burrito for it to qualify as such, but some, like the eggs, are almost always going to be there. Beyond that, there are what I think of as classes of components, each delivering important characteristics to the final roll. Note, though, that some ingredients and components can do double duty: avocado and sour cream can each be both creamy and cooling, while beans and some potato preparations can be both creamy and carby.', 'Accepted', '2020-07-30 09:19:05', '2020-07-30 10:36:43'),
(3, 'Joe', 'How to Back-Slice Chives', 'joe@gmail.com', 'blog-9.jpg', 'A long time ago, back when we were still cooking in the Serious Eats test kitchen, we shot a video for my French-style brown butter potatoes. Before every shoot there\'s always an hour or so of set-up, with Joel Russo, our resident expert in all things video, tinkering with cameras and lighting, while I do last-minute knife work and get all the mise en place into cute little bowls.\r\n\r\nUsually, the time leading up to a shoot is a bit of a mad dash to get all the time-sensitive kitchen prep work done before shooting—making sure that doughs are properly proofed, or figuring out a plan B because there wasn\'t any good-looking asparagus at the farmers market that morning, etc. It\'s the closest I get to recreating that high-adrenaline scramble of getting set up for a busy service in a restaurant kitchen. But for this shoot, there wasn\'t much to do. The only prep work beyond rinsing potatoes involved slicing some chives.\r\n\r\nIn many restaurant kitchens, picking and slicing herbs for garnish is usually one of the last things you do before diners walk in the door (some chefs even insist on cutting all herbs to order). More often than not, cooks are running behind on completing all the tasks on their prep lists when service begins, so if you peek into a kitchen right when the doors open, it\'s pretty common to see all the cooks on the line hurriedly picking cilantro and slicing chives. In one of the kitchens I worked in, I was responsible for slicing chives for every station in the kitchen, and it was always the final task I had to cross off my prep list before chugging a coffee and getting crushed with orders.\r\n\r\nIt was at these jobs that I was taught to cut chives in a very specific way, using a method called the back-slice. It\'s the technique that I still use today when cutting chives, scallions, and other delicate herbs, but especially those in the allium family. So, while Joel fiddled around with the positioning of an overhead camera and various lighting stands, I back-sliced chives for sprinkling over brown butter-drenched potatoes.\r\n\r\nAfter watching me for a bit and noting how fastidious I was being about a little garnish, Joel started asking me questions about what I was doing. I explained my reasoning, and we decided it would be useful to produce a brief knife skills video on the subject. And here we are.\r\n\r\nIs mastering the perfect chive-slicing technique the most important thing for home cooks? Absolutely not. But a lot of people are cooking more than ever at home these days, so hopefully this will be helpful for anyone looking to practice and hone their knife skills in the kitchen. At the very least, it\'s another chance to sound off in the comments about how all my videos should be played at 1.5x speed. I\'m all for convincing Joel to just jack up the playback speed since my artificially sped-up knife skills will make my chive slicing look even more impressive.', 'Accepted', '2020-07-30 10:53:49', '2020-07-30 10:55:38'),
(4, 'Liya Fernandes', 'Blueberry lime cornmeal crumble', 'liya@gmail.com', 'blueberry-pie.jpg', 'When I was a kid, my mom used to make a dessert that combined canned pie filling, cake mix, and a stick of butter into something of a quick cobbler. The combination of the three made for a sweet, salty, and rich dessert that I would be devour by the pan. Often, I’ve tried to approximate this by using fresh ingredients, but I never could get it quite right.\r\n\r\nRecently, I attempted to make a batch of blueberry bars, and the recipe turned out to be a disaster, at least structurally. The base was too crumbly and the filling too gooey for them to be handheld and portable. To eat it, you needed a spoon. That said, the flavor was still excellent, and as I tucked into a big bowl of the buttery cornmeal crumble combined with juicy blueberries livened up with lime juice and vanilla, I deemed the dessert a success.\r\nAs I worked my way through the dish, however, I also realized how much it reminded me of that treat my mom used to make. It never fails to amaze me how life turns out when you’re making other plans. And so, the foundation of this recipe may not have worked as a cookie, but as a fruit-and-pastry dessert made for bowls, ice cream, and spoons, the recipe was exactly as it should be.\r\n\r\nSo, what should I call it, I wondered? The combination of juicy berries livened up with lime juice along with a buttery cornmeal pastry wasn’t exactly a pie, as the topping was too tender to hold together the juicy berries in a contained slice. Though to label it a cobbler also seemed a bit off, as well, since mine tend to skew toward a melding of biscuits with fruit, and this cornmeal dough was more tight then loose.\r\n\r\nThen I stumbled upon the family of desserts known as crumbles. Like a crisp, which is a fruit dessert capped with a nut and oat crust, a crumble’s topping is also a short pastry though the oats and nuts are missing and instead it’s made with flours and butter. And so, blueberry lime cornmeal crumble was deemed the new name.\r\n\r\nThough no matter what you call it, if you have a bounty of blueberries this is a simple dessert you will want to prepare and share. Unlike pie, which requires rolling out a dough, this crumble has you pat the dough into a pan or skillet before topping with fresh berries tossed with lime juice and zest, sugar, and cornstarch, along with more pastry. As for the cornmeal dough, it’s also a cinch as it’s butter, sugar, lime juice and zest, flour, and cornmeal mixed together until smooth. Working with it is not difficult at all.\r\nWhile I haven’t given up on making a from-scratch version of my mom’s dessert, this blueberry lime cornmeal crumble is now going into heavy rotation. Blueberries are at their peak now but you could also make this with frozen berries, too, or other fruit such as peaches, raspberries, or cherries, as well.\r\n\r\nBesides the flavor, however, what I love most about this dessert is how effortless it is to throw together. Tangy, tender, crumbly, and sweet, this crumble is a cinch to prepare and I know it’ll be a hit at your next summertime gathering.\r\n—————\r\nWould you like more Homesick Texan? Well, I’ve started offering additional recipes for paid subscribers to help with the costs of running the site. While I’m not taking anything away, if you’d like to support Homesick Texan and have access to exclusive, never-seen-before subscriber-only posts, please consider becoming a member; annual subscriptions are as low as $25. Thank you for reading, your consideration, and your support!\r\n—————', 'Accepted', '2020-07-30 12:11:21', '2020-07-30 12:30:32'),
(5, 'Liya Fernandes', 'Texas banana pudding', 'liya@gmail.com', 'Texas-banana-pudding.jpg', 'In the summer of 1923, Aza-Jean Jones of the Central Texas town of Sidney shared a recipe in a local newspaper. It was for banana pudding, and hers called for milk, eggs, vanilla, bananas, and 20 cents worth of a store-bought cookie known as Vanilla Wafers.\r\n\r\nBanana pudding was not a new treat, as recipes had appeared in cookbooks and newspapers since the late 1800s. The earliest renditions, however, mixed a custard with said fruit, along with either bread crumbs or sponge cake. It wasn’t until 1921 that the thin vanilla cookie produced by the National Biscuit Company (soon to be known as Nabisco) became a key ingredient instead.\r\n\r\nVanilla Wafers were introduced by Nabisco in 1898. (The name was shortened to Nilla Wafers in 1967). Why it took 23 years for it to be combined with a custard enriched with bananas is a mystery, as is the name of the person who originated the idea, though the first published recipe with the cookies was in August of 1921 in the Bloomington, Illinois Pantagraph.\r\n\r\nSo, while Mrs. Jones may not have been the first to add boxed cookies to her banana custard, she was still one of the earliest. For Texans, Aza-Jean Jones was a banana-pudding pioneer.\r\n\r\nNow, most people associate banana pudding with the South. While its origins are unknown, the initial recipes appeared in the New York media, which raises more questions than answers. That said, most appearances of banana pudding throughout the years have been in Southern publications, with one particular location reigning supreme.\r\nIf you guessed Texas, you would be correct. In fact, it’s the odd Texas barbecue, backyard gathering, or church potluck that doesn’t have banana pudding on hand. And for the past 100 years, Texas is tops for the number of press mentions of banana pudding, with over 20,000 stories featuring this beloved dessert appearing in Texas publications. For comparison, the place with the next-highest number of references is North Carolina with around 3,700.\r\n\r\nClearly, Texas is banana-pudding country.\r\n\r\nThe earliest recipes, besides using cake, also blanketed the pudding with a baked meringue. Even after the cookies took the place of pastry, the meringue often remained. A friend from Tennessee recently showcased her family’s method and it was indeed topped with a layer of sweetened, beaten egg whites.\r\n\r\nA meringue, of course, is a practical consideration, as the custard calls only for the yolk and it allows the whole egg to be used. But in Texas, the meringue is usually set aside and if there’s any topping at all, it’s whipped heavy cream along with perhaps more cookies and bananas. Texas banana pudding is typically meringue free.\r\n\r\nAnother difference from other regions is that while it can be served warm, in Texas it’s usually chilled. This not only benefits eaters during the hot summer days, but also it allows the cookies to soften and meld with the custard and bananas creating a cohesive dessert that’s easy and comforting.\r\n\r\nThere are many variations of basic banana pudding, with some going wild and smoking their bananas or splashing bourbon into the mix. As for myself, I’ve been known to prepare peanut butter cookies and use those instead of boxed, or even turn it into ice cream. But sometimes you just want the classic, and so here it is—a simple custard layered with sliced ripe bananas and boxed vanilla cookies.\r\nMy banana pudding does not veer far from Mrs. Jones’ rendition, though I removed her meringue, as I’m not a fan, and replaced it with the more popular whipped cream. Though the basic chilled trifle has more in common with hers than not, a classic Texan dessert that’s been a favorite for almost 100 years. It may not be a native Texan, but like many, banana pudding arrived here as soon as it could.\r\n\r\n—————\r\nWould you like more Homesick Texan? Well, I’ve started offering additional recipes for paid subscribers to help with the costs of running the site. While I’m not taking anything away, if you’d like to support Homesick Texan and have access to exclusive, never-seen-before subscriber-only posts, please consider becoming a member; annual subscriptions are as low as $25. Thank you for reading, your consideration, and your support!', 'Accepted', '2020-07-30 12:14:17', '2020-07-30 12:30:54'),
(6, 'Liya Fernandes', 'French toast casserole with blueberries and sausage', 'liya@gmail.com', 'blueberry-pie.jpg', 'When most people think of dad cuisine, they think of outdoor cooking. And sure, my dad is an expert with fire—preparing everything from smoked briskets to grilled fish with vegetables. But my dad also wields a deft spatula in the kitchen, especially when he makes his weekend specialty—French toast.\r\n\r\nAdmittedly, French toast is not a complex dish. It’s simply old bread that’s been rejuvenated with eggs and milk before being fried in a skillet. And yet—despite its uncomplicated ingredients—finesse is required to make a good batch, otherwise it can turn out soggy or burnt. My dad, however, always gets it just right. And that’s why his is the best.\r\n\r\nMy connection with French toast and fatherhood isn’t limited to my own experience. Take the film “Kramer vs. Kramer,” for instance. There’s a scene early in the film where Kramer decides to prepare French toast for his son. The two are clearly uncomfortable with Kramer’s new role as caretaker, and as they cook the French toast, eggs are dropped, milk is spilled, and Kramer burns his hand. Their breakfast is a disaster.\r\n\r\nAt the end of the film, however, you see Kramer and his son making French toast in a beautifully coordinated rhythm, as they’ve grown close and learned how to live with each other. Who knew French toast could so eloquently illustrate a father and child’s relationship?\r\nNow, all that said—I’m not going to tell you how to make French toast. Nope, my belief is that it’s not a dish that can be explained by words—practice is what makes it turn out perfect. But, I will share with you the next-best thing—my French toast casserole, made with blueberries and sausage.\r\n\r\nMy grandma likes to say that I take simple things and make them all complicated. If that’s true, then she will not be surprised that I’ve taken my dad’s simple yet elegant dish and embellished it a bit. Much like regular French toast, French toast casserole is comprised of cooked bread that’s been soaked in eggs and milk. But instead of being pan fried, it’s baked. The inclusion of orange juice, fresh blueberries and spicy sausage also breathes life into this French toast casserole.\r\n\r\nMost recipes call for an overnight soak— which you can do—but I think it’s just as good with a short soak, as this keeps the bread from becoming too soggy. And yes, after some time in the oven, the resulting casserole is soft with a bit of crispness, sweet with a hint of savory. Plus, breakfast is done without you having to stand in front of a stove. Sure, French toast casserole isn’t exactly like regular French toast. But don’t worry—the casserole’s heritage is definitely apparent.\r\nadly, I’m not going to be seeing my dad this father’s day, but if I were visiting him I’d make sure he’d have a batch of this waiting for him in the morning, so he could take a well-deserved day off from making the family breakfast. But it’s certainly not a dish to be limited to only Father’s Day, as it’s a terrific weekend breakfast any time of the year.', 'Accepted', '2020-07-30 12:18:20', '2020-07-30 12:30:42'),
(7, 'Joe', 'Macaroni and cheese, Texas cafeteria style', 'joe@gmail.com', 'blog-2.jpg', 'A few years ago, a shop in New York that specializes in vintage restaurant plates had on display white mugs marked with the Luby’s logo. Since Luby’s is a Texas institution, I was surprised and delighted to see the mugs so far from home. And every time I visited the shop, I’d acknowledge the mugs with a smile.\r\n\r\nNow, for those unfamiliar with Luby’s, it is a cafeteria-style restaurant. This means that when you enter, you grab a tray and slide it down a line, pointing out to workers on the other side of a glass partition all the items you wish to eat.\r\n\r\nTypically, you start with a wide array of salads, which often include leafy greens along with carrot and raisin and pea salads, too. Next up are the entrees, where popular options can be chicken-fried steak, enchiladas, and fried chicken. The side dish section will have standards such as mashed potatoes, green beans, and macaroni and cheese. Then, as you continue to push your tray along the line, you’ll see snacks, breads, beverages, and desserts.\r\nAfter you pay the cashier, you take your tray into the dining room, where the lights are typically bright, the chairs are padded with wheels on them, and workers walk around with carts offering refills of tea and coffee. It’s not an upscale experience, but it is a familiar and relaxing one, especially for older folks and families.\r\n\r\nThe cafeteria was never considered cool, but for those who grew up eating at them they were always pure comfort. Indeed, my family dined at cafeterias throughout my childhood, and every Wednesday you’d find us at Luby’s, where I’d get a LuAnn platter stacked with liver and onions along with a bowl of creamy macaroni and cheese.\r\n\r\nAll my life I’ve been fond of the cafeteria experience, which is why seeing those Luby’s mugs in New York made me so glad. But I will confess I failed to buy a mug, and one day when I visited the store, I sadly noticed that they were gone. I had missed my opportunity. And like those mugs, cafeterias could also become a missed opportunity, as once-beloved spots across Texas are now closing.\r\n\r\nNow, about that macaroni and cheese. Like most cafeteria fare it’s not a fancy rendition of the dish. In fact, all the recipes I saw from various cafeterias all called for a similar combination of just pasta, milk, and American cheese. There are no bread crumbs, aromatics, spices, or fancy cheeses, but that’s to be expected. Cafeteria food doesn’t work that way.\r\nHere is my take on the style, which may not be complicated or sophisticated, but it’s still creamy and good. Indeed, it’s a friendly dish that always feels welcome, much like a meal enjoyed at the neighborhood cafeteria.\r\n\r\n—————\r\nWould you like more Homesick Texan? Well, I’ve started offering additional recipes for paid subscribers to help with the costs of running the site. While I’m not taking anything away, if you’d like to support Homesick Texan and have access to exclusive, never-seen-before subscriber-only posts, please consider becoming a member; annual subscriptions are as low as $25. Thank you for reading, your consideration, and your support!\r\n—————', 'Accepted', '2020-07-30 12:22:19', '2020-07-30 12:31:09'),
(8, 'Joe', 'Queso with black beans, Austin style', 'joe@gmail.com', 'blog-6.jpg', 'When I was in my early 20s living in Austin, after a night on the town my friends and I would find ourselves at one of the city’s all-night cafes. The menus at these establishments were vast and we had the choice of anything from pancakes to migas to burgers to tacos. But the one item that always hit the table without fail was an order of queso, an always-welcome bowl of sunshine that let us know life is sweet.\r\n\r\nIn Austin, there are a multitude of iconic chile con quesos. For instance, there’s Bob Armstrong Dip, a hearty dish that’s loaded with guacamole and taco meat. Also beloved is Kerbey Lane’s queso, a creamy white-cheese dip lashed with green chiles.\r\n\r\nThe one I associate the most with the capital city, however, is a molten bowl enhanced with black beans, pico de gallo, and avocado slices such as Magnolia Cafe’s Mag Mud. This combination of silky cheese, spicy beans, and lively fruits and vegetables has a warm aura of good health, which makes it perhaps the most emblematic Austin queso of all. \r\n\r\nAs restaurants have been struggling during these challenging times, I was saddened to learn that the original Magnolia Cafe on Lake Austin Boulevard was closing for good. While the South Austin outpost on Congress Avenue is still here, it was the West Austin one that my friends and I used to frequent the most, as its laidback vibes set amongst the hilly, natural beauty of that part of town always made it a welcome place to chill after a long night or hectic day.\r\nThe restaurant first opened in 1979 as The Omelettry West, with the original Omelettry beginning its long run the year before in North Austin on Burnett. The Omelettry is where the inclusion of black beans to Tex-Mex breakfast plates first became popular in Austin, and when the married managers of Omelettry West, Kent Cole and Patricia Atkinson, bought out the owners and changed it to the Magnolia Café in 1987, that Austin-style flourish continued.\r\n\r\nA year later, the couple divorced, with Patricia starting Kerbey Lane Café, another all-night diner famous for both queso and black beans. Magnolia Café at this time also opened its Congress Avenue location, so it’s been around almost as long as the first.\r\nDespite that longevity, however, I still associate the first Clarksville Magnolia as the quintessential cafe. It was even immortalized in Richard Linklater’s “Boyhood,” with the protagonist sitting in its bright dining room, dipping his chips into a bowl of queso and deciding that luscious blend of chiles and cheese gave purpose to his life.\r\n\r\nI agree. And when you enhance that elixir with black beans, pico de gallo, and avocado, life comes into focus and you realize it’s a beautiful, sunny treat.\r\n\r\n—————\r\nWould you like more Homesick Texan? Well, I’ve started offering additional recipes for paid subscribers to help with the costs of running the site. While I’m not taking anything away, if you’d like to support Homesick Texan and have access to exclusive, never-seen-before subscriber-only posts, please consider becoming a member; annual subscriptions are as low as $25. Thank you for reading, your consideration, and your support!\r\n—————', 'Accepted', '2020-07-30 12:24:25', '2020-07-30 12:31:21'),
(9, 'Joe', 'Jalapeño salmon patties', 'joe@gmail.com', 'blog-2.jpg', 'When I was in college, a friend went over to a guy’s house one night after a party. They were hungry and he offered to make her dinner. After a quick survey of his kitchen, however, he discovered he only had a can of salmon, a couple of eggs, and some bread crumbs. “How do you feel about salmon patties?” he asked.\r\n\r\nThe next day when she was telling our group of friends this story, we laughed. Why? Because there is probably nothing less romantic than a salmon patty. My friend, however, disagreed.\r\n\r\nShe explained that she not only encouraged him to whip up a batch, but they were just as delicious as the ones her family made. While their relationship didn’t go very far, she always felt fondly towards that guy because he was welcoming and genuine, much like a patty made from canned seafood.\r\n\r\nNow, if you grew up in Texas or the South, chances are that you have also had a patty made from canned salmon. Or perhaps, it was given the fancier name of salmon croquette. No matter what you call it, however, most will agree that this dish prepared with humble ingredients is satisfying and good. In fact, they were my grandfather’s favorite meal.\r\nFor those who are unfamiliar, salmon patties are similar to crab cakes in that you take cooked, flaked seafood and bind it together with egg, bread crumbs, and seasonings before cooking. While you could make salmon patties with freshly cooked salmon (which I’ve been known to do myself), in a pinch using good quality canned salmon can be just as fulfilling, especially if you spice it just right.\r\n\r\nFor instance, for mine, I add plenty of dill, onion, lime juice, and garlic. I also dice up some jalapeños for a pop of heat. So, while they’re not quite as simple as the ones your great-grandmother probably made, they’re still familiar yet fresh.\r\n\r\nTo serve, you can present them on their own, or plate them with a salad or potatoes. Though I’m all about placing my patty on a bun along with slices of juicy tart pickles, shredded iceberg lettuce, and a creamy, tangy remoulade or buttermilk dressing to bind it all together. It’s crisp, cool, and refreshing.\r\nJalapeño salmon patties may not be the most romantic meal, but serving this welcoming and genuine dish is a wonderful way to show how much you care.', 'Accepted', '2020-07-30 12:26:30', '2020-07-30 12:31:33'),
(10, 'Joe', 'Boudin kolaches', 'joe@gmail.com', 'bg_2.jpg', 'When I recently went to go vote, there were boxes of kolaches at the polling station for people to snack on as they waited in line. What struck me was that while there were plain sausage and jalapeño sausage kolaches, this being Dallas, absent was the Houston and Southeast Texas favorite, the boudin kolache.\r\n\r\nNow, when I say kolache, what I really mean is klobasnek, as these were the contained pastry that was stuffed with savory sausage, and the kolache is instead the open pastry with a sweet filling. So, some may know them as sausage kolaches, but their true name is kloabsnek, with the plural being klobasniky.\r\n\r\nAs for those who are unfamiliar with boudin, it’s a rice and pork sausage that originated in Louisiana Cajun country. You might also see it spelled as “boudain” though purists insist that the addition of the “a” is incorrect. There is also a French sausage known as boudin, which is a blood sausage, but the American version gets its funkiness from pork (or chicken livers) instead.\r\n\r\nI have a recipe for homemade boudin, which I haven’t made since I’ve returned to Texas since it’s now available to me. That said, while I can find the sausage at the stores in Dallas, you still don’t see the ubiquity of boudin-enhanced dishes that you’ll encounter in East and Southeast Texas, such as said boudin kolaches.\r\nThere is much debate about the origin of boudin kolaches, as some stipulate they came out of Louisiana while others attribute the Cambodians that own and operate many of Texas’s doughnut shops as the creator of the combination. I have no idea. What I do know, however, is that they started to gain popularity around 2007 in the Houston area and the Beaumont area.\r\n\r\nAt first, they were simply a weekend special at Houston doughnut shops such as the Shipley’s on Main. Later, however, they started appearing daily and my first time enjoying one was at V&K Donuts, a Cambodian-owned doughnut shop in the Houston suburb of Jersey Village.\r\n\r\nTo be honest, I wasn’t sold on the idea of a rice-and-pork sausage being inside a roll, as I felt that might be a bit too heavy on the starch. But as I tucked into the still-warm tender pastry and tasted the savory, peppery blend of pork, herbs, and aromatics, I decided that the two made good companions after all.\r\n\r\nThere is no definitive way to prepare a boudin kolache, as some simply slice the sausages while others remove the filling from the casing before adding to the dough. Likewise, some pastries are sweet and soft while others are buttery and rich.\r\n\r\nFor mine, I prefer to keep the boudin in its casing as I find it’s easier to contain in the dough. And my pastry, which is an adaption of an old Czech-American recipe from the town of West (considered by some the kolache capital of Texas), is sweet and buttery.\r\nMaking kolaches isn’t a casual undertaking, but once you get your dough prepared, you can fill it with anything you like. In my past efforts, I’ve often focused on the fruit fillings, such as strawberry.\r\n\r\nYet even though I’m back in Texas, there are still regional specialties that are not common across the state. So, I share with you a recipe for boudin kolache, a savory, hearty breakfast pastry that is a distinct taste of Southeast Texas with its appealing blend of Czech, Cajun, and Texan cuisines.\r\n\r\n—————\r\nWould you like more Homesick Texan? Well, I’ve started offering additional recipes for paid subscribers to help with the costs of running the site. While I’m not taking anything away, if you’d like to support Homesick Texan and have access to exclusive, never-seen-before subscriber-only posts, please consider becoming a member; annual subscriptions are as low as $25. Thank you for reading, your consideration, and your support!', 'Accepted', '2020-07-30 12:29:48', '2020-07-30 12:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `blog_id`, `created_at`, `updated_at`) VALUES
(1, 'Nice!!', 1, 1, '2020-07-30 07:53:52', '2020-07-30 07:53:52'),
(2, 'Thanksss...', 2, 1, '2020-07-30 08:13:47', '2020-07-30 08:13:47'),
(3, 'Testing', 1, 1, '2020-07-30 10:06:09', '2020-07-30 10:06:09'),
(4, 'Good...', 2, 3, '2020-07-30 10:57:14', '2020-07-30 10:57:14'),
(5, 'Nice article!', 4, 2, '2020-07-30 11:29:06', '2020-07-30 11:29:06'),
(6, 'Nice article!!', 1, 10, '2020-07-30 12:32:35', '2020-07-30 12:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_07_27_122216_add_username_field_to_users_table', 2),
(4, '2020_07_27_123705_add_role_field_to_users_table', 3),
(5, '2020_07_27_122012_add_phone_field_to_users_table', 4),
(6, '2020_07_27_184027_create_contacts_table', 4),
(7, '2020_07_27_192720_create_blogs_table', 5),
(8, '2020_07_28_114441_create_comments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `role`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$BC1Y4dW.FOARh2Kgn29a4eHzPQ4XyWHkELTUZ.jXDQLmqx2SOiv4q', '26Z8dnRT38V4WWkpelo3zP9gSprHdVnzOoxtfNtiMRJorIOc4ESp0AWdwzaD', '2020-07-30 06:44:06', '2020-07-30 06:44:06', 'Adminn', 'admin'),
(2, 'Krystal', 'krys@gmail.com', '$2y$10$fm6hnaHDmqNJxJsqGClPle/TTU3NrpkBIxhyZ4pv0tKUV6UhuaKuW', 'Lk3Zj98SbyAqJlRwCcd06LIjRSSt326Ij2AGgfEXFHceJcux2b1ydrJYJZDM', '2020-07-30 07:28:29', '2020-07-30 07:29:15', 'kryss', 'user'),
(3, 'Joe', 'joe@gmail.com', '$2y$10$tV2vfLk6SoASQ7W5GpzcIOOCod86ciEGooLh4agKh5kaJUk4.hnP2', 'WVC59n1CLkVhj61TJ9qUkiE3Ah6wTkexK8wZ16nlNOIEv7cjuUZDLm81Wtej', '2020-07-30 10:52:47', '2020-07-30 10:52:47', 'Joeee', 'user'),
(4, 'Smit', 'smit@gmail.com', '$2y$10$KNTOKWbij6SBfpSAGXzbRe.sYlVA0qU8pSxi3tFFtloPbYZ758GD.', 'UMLq1TyRtsb04jMMjFXTK6G94KQXOc4smyglOFE6GaIKOVhckBd8OXq1Mqtt', '2020-07-30 11:27:57', '2020-07-30 11:27:57', 'smit', 'user'),
(5, 'Liya Fernandes', 'liya@gmail.com', '$2y$10$VjGapbNZOrHcR5dBQsynl.1YYaCCD98QnxgRi.puRQHX6Ls1mG8eO', 'g2OIS39QGJqgIxNdWn6KhbHd091HZJPvISO2HpDwh1oko3R0An7CKGwCLwqe', '2020-07-30 12:01:39', '2020-07-30 12:01:39', 'Liyaaa', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
