This program is my attempt to answer a question posed recently by my friend Cody Cobb:

> I've been thinking about label makers — those circular alphabet embossers with the plastic trigger handles. Specifically, I've been thinking about how to optimize them. Presently, to my knowledge, all label makers have a layout that's more or less alphabetical in order, with a few trailing marks of punctuation. It seems obvious that this can't possibly be the most efficient arrangement of letters, as alphabetical order is pretty much an arbitrary standard; rather, it's a convenient one in terms of ease of use, for even though it might take quite a deal of time to reach the letter you need, at least you know where it is without too much hunting.

> Now, assume we have a user who's quick to adapt to new systems, such that we can neglect learning curves when calculating efficiency. How then would we determine the optimal arrangement of letters on a label maker? I'm reminded of alphabet boards they use to facilitate written communication for patients who cannot speak (see: Tio in Breaking Bad, that French guy in The Diving Bell and the Butterfly). We could simply use those, except they have their own peculiar designs and do not have the same circular constraints of a label maker. You would want to group frequently used letters (e, t, s, a, etc.) together, but they might not necessarily be right next to each other, but rather have a set number of spaces between them on average.

>One way to approximately solve this problem is to just brute force it. Take a sufficiently large representative sample of nouns (we are using this to label things, after all), and simply try out every permutation of a label maker wheel on that collection of words, calculating how many incremental turns of the wheel are required on average. I'm no computationer scientician, so I'm not equipped to analyze the size of this problem. I imagine it would be like protein folding software, which I understand to be immense in scope.

>So, let's take 30 characters (alphabet and basic punctuation), and arrange it on a circle. That's 30! different combinations to test against a database of, say, a thousand words. That looks to me like a very big number indeed, but I really don't know. How long would that take, computationally? Would this be a simple program to actually code, just one that would take a while to run?

I've taken a few liberties, most notably in that I used a 27 character alphabet (letters plus a space character).  It would be trivial to incorporate Cody's proposed 30 character alphabet into this program (just change line 15) but the problem is finding a reasonable dataset to test against.  As it stands, I'm using the [1000 most common english words found on splasho.com](http://splasho.com/upgoer5/phpspellcheck/dictionaries/1000.dicin).


###Top Performers

Here are a few of the alphabets that performed the best.  The number on the right is the overall number of turns required to spell out the 1000 most common english words.  The lower the score, the better the alphabet performed.

|Alphabet|Number of turns|
|-----|------|
|yjlvankgpocuqmxiwfhszbrte d|34460|
|ukxpzfwse ardtlcnomqyibhjvg|34565|
|otvpusr dmehnafliwcxzyqbjgk|35091|
|ctlykzmqxpjgivwbfhordun esa|33262|
|dshaoicjwrpfgxuvmbklqzyn et|35242|
|umwcgyzqfjvixkdtl rheospnba|34872|
|xhlybiqcwvuzafopmdrest ngkj|34827|
|eqrydbnxkvouzwmjpsihfagltc |34698|
|qd nliypbvzjsgwfkxohcmuater|35820|
|wuvserh tnfipomlaqjkxzybdcg|34372|
|zqaynirgptes ukdmhbcfxvjolw|35011|
|whxkujqbmodplaingtrv efsycz|34465|
|hfzvxgqwdjpuimnlbt resocaky|33695|
|tbye vrdalfhognwiuzmpjkxcsq|34697|
|dliqjxgybvznkhwst ecmroaupf|33097|
|cxvuqizsfgpkydhtae lrbjwmon|34578|
|iduzhpgvxkbqwroys ecnltamfj|34921|
|ocmwyxbjfzugvqindhlert pksa|33037|
|tga ielnrydfqxcomvkuzwhpjsb|33936|
|t elpnjmzkxvugobqicfwsadhry|34405|
|fgydraebk cpsntuwmhxjvoziql|34684|
|pklvbfjzgdwouqiscmry thaenx|34755|
|ucvrjwfzgkixhqetn dsapyblmo|34668|