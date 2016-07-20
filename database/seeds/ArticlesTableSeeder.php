<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \DB::table('articles')->truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        \DB::table('articles')->insert([
            0 => [
                'id'                    => 1,
                'title'                 => 'Enhance Your Quilt with Sewing Quilting Machines',
                'content'               => '
<p>Quilting started as a social activity. Farm wives got together when they weren&#39;t performing chores. They made bed coverings, curtains, petticoats and other articles. Patchwork was a result of a fabric shortage. Old items would be woven into a single fabric, producing wondrous designs. That form has become everything from an expression of art to a charitable statement.</p>
<p>Today quilting is as much a hobby for enjoyment as it is a professional endeavor. Whether for fun or profit, quilting is a great opportunity to create. Nothing has made these projects easier than the quilting sewing machine.</p>
<h2 itemprop="hasPart about">Types of Quilting</h2>
<p>Patchwork, or pieced, quilting is only one form of the art, usually the one most of us begin with. Most quilters tend to stay within traditional patterns that include blocks of rectangles and squares, rarely stepping outside of those shapes.</p>
<p>Fortunately, a quilting sewing machine leads to venturing into other styles, especially if one utilizes a more advanced model that allows for easy design. Postage stamp quilting consists of squaring, but small rows of objects. There is also the more difficult appliqué process that requires shapes on backgrounds that promise to create a stunning view. Paper piercing is developed when the quilter stitches fabric to a paper foundation. Used as guides, the quilter can block the entire quilt, constructing all sorts of objects and shapes.</p>
<h2 itemprop="hasPart about">The Growth and Beauty of Free Motion Quilting</h2>
<p>Free motion quilting has grown in popularity among quilters. This is an advanced stitch process where the sewing machine uses a darning foot as opposed to its feed dogs. This lets the fabric move freely with the quilter carefully feeding the fabric. This requires a steady hand as even an experienced quilter can easily disrupt the stitch process.</p>
<p>Free motion will produce an incredible design as it resembles embroidery done in a hand sewn fashion but with the convenience of modern technology. In the age of quilting sewing machines that can computer generate designs, old school quilters appreciate the greater control of the patterns free motion can put into their quilting.</p>
<p>Some quilting sewing machines make for a better range of free motion. There are also courses that can help the quilter develop the steady touch this process requires.</p>
<h2 itemprop="hasPart about">How to Select Quilting Sewing Machines</h2>
<p>From Singer to Brother, there are a broad selection of machines a quilter can choose from. A seasoned quilter will know how to wean through every feature, service and their accessories. Their experiences with quilting has taught them how to find the machine that fits. They look at the size, determining if it&#39;s too large or heavy for their considerations, especially if the quilting sewing machine has to go into the home. They look at everything in a machine, from built-in patterns, thread options and easy-to-use functionality. The professional quilter will consider customer needs and the production process to see if the quilting sewing machine can handle the workload.</p>
<p>Fortunately, there are products that fit any budget and requirements.</p>
<p>With a dedication to sew and learn, and with the right quilting sewing machine, the quilter can look forward to a productive and enjoyable future with their passion.</p> ',
                'slug'                  => 'blog-post',
                'meta_keywords'         => 'blog post',
                'meta_description'      => 'Blog Post',
                'category_id'           => 1,
                'lang'                  => 'en',
                'created_at'            => '2016-05-10 13:02:37',
                'updated_at'            => '2016-05-10 13:02:37',

            ],
            1 => [
                'id'                    => 2,
                'title'                 => 'Which Quilting Machine is Right for You?',
                'content'               => '<p>Quilters tend to be very passionate about their talent and rightfully so! However, finding the right sewing machine is essential for every level of quilting. Therefore, it’s important to look at the features of quilting sewing machines for sale that are best for you.</p>
<h2 itemprop="hasPart about">Quilting Sewing Machine Basics and More</h2>
<p>Before browsing a quilting machine sale, take some time to think about how you will use your machine. Is this a craft that you will be dabbling in, or is this an expert craftsmanship that you will be devoting much of your time to? Determine the type of quilting you will do; consider if you will you be making basic or heavy duty quilts, adding lace or using fancy embroidery stitching. Make a list of the extra features you prefer before looking at any quilting sewing machines for sale. </p>
<h2 itemprop="hasPart about">Recommended Quilting Sewing Machine Brand</h2>
<p>For more than 25 years, the Grace Company has had a reputation for producing the best quilting sewing machine for sale. They are the number one manufacturer of both machines and hand quilting frames. Throughout the years, the Grace Company has expanded to include quilting hoops and additional accessories. </p>
<h2 itemprop="hasPart about">Best Quilt Sewing Machine for Sale</h2>
<p>The top quilting machine for sale is the Unique Quilter by the Grace Company. They make the best machine quilting frames in the entire world and are rapidly becoming the frame manufacturer of choice for numerous long arm machine frame companies. The Grace Company makes quilting machine-frames and accessories for every level of quilter. </p>
<h2 itemprop="hasPart about">Quilt Frame Home Sewing Machine</h2>
<p>One of the best quilting sewing machines for sale for home use is the long arm quilt frame machine. They allow you to make quilts of all sizes. The long arm permits you to move the sewing head freely without moving the fabric, which allows for the precision detail. </p>
<h2 itemprop="hasPart about">Industrial Sewing Machines for Sale</h2>
<p>The Grace Company has the best industrial sewing machines for sale. Commercial quilting machines deliver the crucial combination of powerful performance, strong durability and high value for marketable sewing purposes. Home industrial grade sewing machines are available as well and are ideal for creating artistries made of sturdy materials such as pillows, cushions and seat covers.</p>',
                'slug'                  => 'which-quilting-machine-is-right-for-you',
                'meta_keywords'         => 'blog, post, 2',
                'meta_description'      => 'blog post 2',
                'category_id'           => 1,
                'lang'                  => 'en',
                'created_at'            => '2016-05-10 13:02:37',
                'updated_at'            => '2016-05-10 13:02:37',

            ],
            2 => [
                'id'                    => 3,
                'title'                 => 'Hand Quilt Frames',
                'content'               => '<p>The word quilt comes from the Latin word "culcita," which means stuffed sack. "Cuilte" is the French word that more closely resembles the term used in the English language. The earliest known quilt consisted of a garment that adorned an ivory figure of an Egyptian Pharaoh that was traced to 3,400 B.C. One of the earliest surviving bed quilts was found in Sicily and was created sometime during the 14th century. Measuring 106 inches by 122 inches, the historic piece can now be found in the Victoria and Albert Museum in London. </p>
<h2>Hand Quilt Frames</h2>
<p>Pioneer women are credited with being the creators of hand quilt frames. The original frames might have stretched across the backs of chairs when in use. Other methods involved hanging the frame from the rafters of a home using ropes and pulleys. In each instance, when the day&#39;s work was completed, the quilt and frame were rolled or hoisted and removed from the living area. When homes and rooms grew larger, women could reserve a space to house the frame for extended lengths of time until the piece was completed. Full-sized, the Three Roller Frame and the Q-Snap Floor Frame are the three types of hand quilt frames commonly used today.</p>
<h2>Full-Sized Frame</h2>
<p>Also known as a stretcher frame, this device holds a stretched quilt horizontally, which creates a table-like image. The frame is typically constructed of wood and held together at the corners using C-clamps. Four legs support the frame and the quilt. The convenience of this type of frame involves the ability to hold the bottom, batting and top of the quilt tautly without the need for basting. </p>
<h2>Three-Roller Frame</h2>
<p>This type of frame is used for hand or machine quilting. The quilt back and batting are held in place by rolling the fabric onto two roller boards. The top of the quilt is rolled on a third board. All of the fabric layers are tightly maintained as the user rolls the quilt to the desired work section. Depending on the materials used in construction, the rollers may be extended or retracted to accommodate the length or width the quilt. </p>
<h2>Q-Snap Floor Frame</h2>
<p>This type of frame is typically constructed using PVC pipe. Similar to an embroidery hoop, the quilter lays the basted layers over the bottom frame and clamps the fabric using a top frame. Though having to baste a quilt prior to use, the lighter weight and smaller size of the overall frame makes the device easier to move from one location to another. Kits are also available that allow the user to tilt the frame to the angle of choice.</p>',
                'slug'                  => 'hand-quilt-frames',
                'meta_keywords'         => 'blog, post, 3',
                'meta_description'      => 'blog post 3',
                'category_id'           => 1,
                'lang'                  => 'en',
                'created_at'            => '2016-05-10 13:02:37',
                'updated_at'            => '2016-05-10 13:02:37',

            ],
            3 => [
                'id'                    => 4,
                'title'                 => 'The Grace Company',
                'content'               => '
<p>For many companies, innovation and invention are the foundation on which success is built.  This has been a key component in the quilting industry, which has seen a dramatic transformation due to technology that has made the process of quilting easier for those who possess a passion for the craft.  Over the past 25 years, The Grace Company has taken innovation and invention to entirely new levels with its commitment to integrating the worlds of quilting and technology.  The results have been products that have not only revolutionized the industry, but also given those with a love of quilting the ability to create masterpieces almost beyond belief.  With their commitment to customer service and always being willing to take a concept and develop it into yet another product to satisfy their customers, The Grace Company has started a tradition of excellence that has no end in sight. </p>
<h2>Quilting Frames</h2>
<p>To create any quilt, a quilting frame is required to make the task possible. The Grace Company, having developed a line of quilting frames unlike any previously seen, quickly became the go-to company for those needing the best possible equipment.  With both machine-quilting and hand-quilting frames from which to choose, customers soon found themselves with a variety of possibilities when it came to quilting.   The frames offered numerous advantages to customers, including:</p>
<ul>
<li>Professional-quality rail system</li>
<li>Improved fabric tension</li>
<li>Height adjustment to fit sewing machines</li>
<li>Speed control and stitch regulators</li></ul>
<p>With the introduction of these features, Grace quickly became the company associated with quilting quality and began its ascension to the top.  </p>
<h2>Computerized Technology</h2>
<p>However, what truly set The Grace Company apart from other competitors was its embracing of computerized technology when it came to quilting. With its development of quilting pattern software, the company made it possible to see how a design would look before the first stitch was sewed.  In doing so, quilts could contain designs that were more intricate than ever before, and as a bonus would take far less time and effort than in previous years.  Some of the most popular quilting software programs have included:</p>
<ul>
<li>QuiltMotion</li>
<li>Quilter&#39;s Creative Touch</li>
<li>Quilter&#39;s Creative Design</li></ul>
<p>With numerous testimonials from thousands of satisfied customers, The Grace Company has led the way for those who wish to continue combining traditional quilting methods with today&#39;s technology. And for those who have used the equipment as well as those who have viewed the masterpieces that have been made, the results speak for themselves.</p>',
                'slug'                  => 'the-grace-company',
                'meta_keywords'         => 'blog, post, 4',
                'meta_description'      => 'blog post 4',
                'category_id'           => 1,
                'lang'                  => 'en',
                'created_at'            => '2016-05-10 13:02:37',
                'updated_at'            => '2016-05-10 13:02:37',

            ],
            4 => [
                'id'                    => 5,
                'title'                 => 'Grace Qnique Machine',
                'content'               => '
<h2>Serious Quilters Require Specialized Sewing Machines</h2>
<p>Anyone interested in making quilts or other layered fabric projects such as decorative wall hangings needs the best equipment available. In Canada, people who love to sew can find the Grace Qnique Machine for sale online and at brick-and-mortar stores. Quilters are serious about the machines they use, leading to looking for particular features that make stitching multiple layers of fabric together simpler. For over 25 years, The Grace Company headquartered in Salt Lake City has specialized in designing, manufacturing and selling the highest quality equipment necessary for individuals who love quilting. Instead of dealing with bulky materials on traditional sewing machines that have a small arm work area, buy the Grace Qnique Machine. </p>
<h2>A Quilting Machine with Numerous Features is Necessary</h2>
<p>Many quilters today want to make bedcovers for larger mattress sizes such as queen or king, leading to needing bigger quilt squares. Stitching on larger squares of fabric is easier with a mid-arm machine with a bigger working space to maneuver the material quickly. Instead of needing to stop and start the sewing machine often to rearrange fabric, the seamstress can rotate the squares while stitching. Not only is this maneuverability a great feature while making individual squares, it is also helpful when stitching on borders, fillings and backings of quilts. The engineers who designed the Grace Qnique Machine have thought of everything, including:</p>
<ul>
<li>An easy to read full color LED menu screen</li>
<li>Built-in stitch regulation (precise, cruise, baste, manual)</li>
<li>Four different sewing modes</li>
<li>Hopping foot components</li>
<li>15-inch machine throat length</li>
<li>Six simple to use fingertip controls</li>
<li>Fast top stitching speed</li>
<li>Sturdy internal construction and mechanics</li>
<li>Heavy-duty metal body</li>
<li>Holders for large spools of thread</li>
<li>Unique wheels to move the machine</li>
<li>Beautiful crisp white finish</li>
<li>Easy dual threading and bobbin filling</li>
<li>Lightweight aluminum body for easy moving</li>
<li>Small enough to store easily</li>
<li>Interchangeable between left- and right-handed</li>
<li>Additional accessory power ports</li>
<li>Dual voltage power supply</li>
<li>Easy to change software with no technician required</li>
</ul>
<h2>What Owners Think about this Quilting Machine</h2>
<p>This Grace Qnique Machine is shipped with several important accessories such as lubricating oil, quilting needles and bobbins that assist with making gorgeous quilts. Quilters are a cohesive group of enthusiasts who highly recommend this machine with an overall 89 percent rating. Owners of this quilting machine believe it has a high stitching accuracy, solid construction and is easy to use. Compared to other specialized quilting sewing machine, this one is much more affordable. For anyone struggling to make quilts on a traditional sewing machine, switching to a specialized machine is a life changer. Customers can request expedited shipping on the Grace Qnique Machine to begin sewing as fast as possible with a new machine.</p> ',
                'slug'                  => 'grace-qnique-machine',
                'meta_keywords'         => 'blog, post, 5',
                'meta_description'      => 'blog post 5',
                'category_id'           => 1,
                'lang'                  => 'en',
                'created_at'            => '2016-05-10 13:02:37',
                'updated_at'            => '2016-05-10 13:02:37',

            ],
            5 => [
                'id'               => 6,
                'title'            => 'Affordable Long Arm Quilting Machines',
                'content'          => '
<p>For many years quilters had to go through the painstaking process of sewing their creations using a traditional sewing machine. This involved working in a tight space, trying to maneuver a large piece, or stack, of fabric. There is no question that the long arm sewing machine makes the joy of quilting even more joyous. If you are looking for affordable long arm quilting machines, there are a few very important questions to ask to ensure you end up with the best model. </p>
<strong>How much quilting space does the machine offer?</strong>
<p>The quilting space and throat space are not equal. Make sure to ask about available quilting space. When you consider investing into one of the affordable long arm quilting machines, remember the bigger is not always the best. The most fitting quilting space is always a comfortable distance for both reach and sight. The recommended distance, for the most comfortable controlled quilting, is from a 12-inch to a 14-inch reach.</p>
<strong>Does the machine run smoothly at both high and low speeds? How much does the machine weigh?</strong>
<p>A machine that is too heavy will cause stress on neck, arms, and back. Test any machine for five minutes or longer to get a sense of what several hours of quilting might feel like. A comfortable weight is usually 65 pounds or less. An excess of vibration can bring about intemperate noise and poor line quality.</p>
<strong>Where is the machine manufactured and is there a trusted warranty?</strong>
<p>If it is important to you that your quilting machine is produced in the United States, then ask the question. A trusted warranty for electrical, mechanical and the outer casting issues you a guarantee of grade A craftsmanship when investing in a quilting machine. Trustworthy companies will stand behind their product and provide a written warranty. They will also provide you convenient customer support services.</p>
<strong>Does the frame system require constant adjustment as you roll your quilt?</strong>
<p>Making acclamations to your knitting surface, by either bringing down or raising your quilt edge to give a level surface on which to join, every time you move your blanket, it turns out to be extremely badly designed and amazingly prolonged. An optional 24-inch Super Leader replaces the 18-inch leader and eliminates the need to reach across the frame to attach the backing.</p>
<p>By asking the right questions when shopping for affordable long arm quilting machines, you know you will get the features that you need in the end. Keep this handy guide with you as you shop, and always ask about any sewing machine feature you are unsure about.</p>',
                'slug'             => 'affordable-long-arm-quilting-machines',
                'meta_keywords'    => 'blog, post, 6',
                'meta_description' => 'blog post 6',
                'category_id'      => 1,
                'lang'             => 'en',
                'created_at'       => '2016-05-10 13:02:37',
                'updated_at'       => '2016-05-10 13:02:37',

            ],
            6 => [
                'id'               => 7,
                'title'            => 'Quilting Machine Manufacturer',
                'content'          => '
<p>There&#39;s nothing that can compare to the fine art of quilting. As a tradition that has been passed down for generations, many a home has a collection of treasured quilts. Some are tucked away. Some are used. Others are lovingly passed on. Quilts hang on walls and are on display in museums and exhibits. They tell a story and great devotion is contained within every square. If you make magic with quilting and want to make your life easier, turn to a quilting machine manufacturer who knows quilting. With a unique quilting machine from the Grace Company, you will be able to make more dreams become reality with every completed quilt.
</p>
<h2>It&#39;s All about Helping You to Produce Works of Beauty</h2>
<p>With a first rate quilting machine produced by the Grace Company, you won&#39;t believe what a difference it can make in your quilting projects. As a quilting machine manufacturer that specializes in all leading brands of quilting machines, there is sure to be a machine that is the right fit for you. When you combine a quilting machine with a frame, you&#39;ll find that it is much easier to produce beautiful quilts that will become part of your heritage. You&#39;ll be able to piece your quilts with ease as the machine sews your layers together. You can count on the expertise of a quilting machine manufacturer to understand the process of quilting inside and out. Let the Grace Company help you to indulge yourself even more in your favorite hobby. If quilting is a part of your livelihood, you really need to find out how a quilting machine can change your life.</p>
<h2>Create a Legacy that is built to Last</h2>
<p>When you design a quilt and see it through to completion, you are leaving a piece of yourself that will be passed on to the future. Whether you are creating quilts simply for the pure joy of it, you give them as gifts, or you sell them in a shop, your quilts capture your imagination. Each one tells a story and it all begins with you. Discover how the Grace Company can help you on the journey to becoming a dream maker. Learn more about quilting machines and find the machine that is the right fit for you. You owe it to yourself to find out how you can bring more quilts to the world.</p> ',
                'slug'             => 'quilting-machine-manufacturer',
                'meta_keywords'    => 'blog, post, 7',
                'meta_description' => 'blog post 7',
                'category_id'      => 1,
                'lang'             => 'en',
                'created_at'       => '2016-05-10 13:02:37',
                'updated_at'       => '2016-05-10 13:02:37',

            ],
            7 => [
                'id'               => 8,
                'title'            => 'Grace Company Quilting Frames',
                'content'          => '
<p>Some of the most interesting quilting frames being made today are the Grace Company Quilting Frames. Grace Company designs their frames to work with large quilting machines, making it easy to quickly manufacture quilts as efficiently as possible. Here is a closer look at the benefits that these frames offer quilt makers.</p>
<h2>Designed for Machine Use</h2>
<p>Grace Company Quilting Frames are designed to make the creation of new quilts with machines as easy as possible. They are designed to be used with a wide range of different quilting machine types, allowing manufacturers to select the perfect machine and frame combo to allow their quilts to be manufactured with the highest quality possible.</p>
<p>One thing that is getting a lot of attention in the quilt-making world these days is the Qnique Quilter. This is one of the best quilt-making machines on the market, and many manufacturers are turning to the Qnique Quilter to improve their capacity to make quilts quickly and efficiently with the highest possible quality.</p>
<p>Grace Company Quilting Frames are designed to be used with the Qnique Quilter. In fact, the Qnique Quilter machine was actually designed specifically to be used with the frames made by Grace Company. The software that Qnique uses includes the best automated quilting programs to make quilting with these frames a breeze.</p>
<p>This makes it easy for quilt makers to set up a combination of frame and machine that works perfectly together. This will streamline their quilt making, saving them time, money and energy. Using frames from Grace Company in conjunction with the Qnique Quilter is a great move that will instantly improve a quilt maker’s bottom line.</p>
<h2>Long History of Excellence</h2>
<p>Grace Company Quilting Frames are the oldest in the quilting world. They have the longest track record of making great quilting frames. The high quality materials they use to construct their quilting frames ensure that all of their products meet quilters’ standards. This keeps the quilt makers coming back, and that is why the frames made by Grace Company have the highest possible reputation in the industry.</p>
<p>Anyone looking for the best frames possible should check out Grace Company Quilting Frames. Their quality construction and ease-of-use make them a great fit in any quilting environment. They are known as the leaders in the quilting industry because of the quality of the frames they make, and quilts made with these frames will reflect that quality.</p>',
                'slug'             => 'grace-company-quilting-frames',
                'meta_keywords'    => 'blog, post, 8',
                'meta_description' => 'blog post 8',
                'category_id'      => 1,
                'lang'             => 'en',
                'created_at'       => '2016-05-10 13:02:37',
                'updated_at'       => '2016-05-10 13:02:37',

            ],
            8 => [
                'id'               => 9,
                'title'            => 'Mid Arm Quilting Machine',
                'content'          => '
<p>Creating a quilt can be one of the most beautiful crafting activities, but it can also be one of the most tedious. When looking at quilts that were made entirely by hand generations ago, it&#39;s hard to imagine how much time and effort it took. Fortunately, technology has advanced to the point of creating equipment that makes doing even the biggest and most complex quilt easier than ever.  For many quilters, a mid-arm machine such as the Qnique Quilter works best for their projects.  Allowing for work on projects that earlier would have required a long-arm machine, these machines offer a variety of features that make sewing even the most complex quilt a pleasure.</p>
<h2>Advantages of a Mid Arm Quilting Machine</h2>
<p>For those quilters who want plenty of work space packed into a smaller machine, the Qnique Quilter does just that.  A mid arm quilting machine offers numerous advantages over traditional long arm machines, such as:</p>
<ul>
<li>Extended Work Area</li>
<li>Multiple Accessory Ports</li>
<li>Dual Thread Towers</li>
<li>Built-in Stitch Regulation</li></ul>
<p>In addition, a mid arm quilting machine is easier to control due to its quick-access buttons that allow for all functions of the machine to be controlled from its two handles, each of which contain three function buttons.</p>
<h2>The Technology of Quilting</h2>
<p>What make today&#39;s quilts so much easier to make are the advances in technology.  With computer automated software such as Quiltmotion available on these machines, the possibilities are endless when it comes to the patterns and styles that can be used on modern quilts.  Whether working on a standard block or one that&#39;s a little bigger, a mid arm quilting machine can do the job every time.</p>
<h2>Mid Arms and Quilting Frames</h2>
<p>For many quilters, one of their biggest problems is finding a machine that fits well with their quilting frame.  With a mid arm machine such as the Qnique Quilter, this is never an issue.  The Grace Company, which is considered the pioneer of quilting frames, offers two frames that work well with mid arm machines.  The SR-2 sets up in Queen or Crib size, while the recently-developed Qnique 14+ frame is a king-size version designed specifically for larger quilts.</p>
<p>Making the best quilt takes the right combination of skill, style and patience along with the best equipment.  For beginners as well as experienced quilters, using a mid arm quilting machine such as the Qnique Quilter can help turn an ordinary quilt into a true masterpiece.</p>',
                'slug'             => 'mid-arm-quilting-machine',
                'meta_keywords'    => 'blog, post, 9',
                'meta_description' => 'blog post 9',
                'category_id'      => 1,
                'lang'             => 'en',
                'created_at'       => '2016-05-10 13:02:37',
                'updated_at'       => '2016-05-10 13:02:37',

            ]
        ]);
    }
}
