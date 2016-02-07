<?php
/**
 * @author Matt Korostoff <mkorostoff@gmail.com>
 *
 * @internal
 *
 * @category
 *
 * @copyright Licensed under the GNU General Public License as published by the Free
 * Software Foundation, either version 3 of the License, or (at your option)
 * any later version.  http://www.gnu.org/licenses/
 */
class alphabet {
	function __construct() {
		$this->order = str_shuffle('abcdefghijklmnopqrstuvwxyz ');
		$this->efficiency = 0;
	}

	function calculateEfficiency() {
		$alphArray = array_flip(str_split($this->order));
		$words = array("able about above accept across act actually add admit afraid after afternoon again against age ago agree ah ahead air all allow almost alone along already alright also although always am amaze an and anger angry animal annoy another answer any anymore anyone anything anyway apartment apparently appear approach are area arent arm around arrive as ask asleep ass at attack attempt attention aunt avoid away baby back bad bag ball band bar barely bathroom be beat beautiful became because become bed bedroom been before began begin behind believe bell beside besides best better between big bit bite black blink block blonde blood blue blush body book bore both bother bottle bottom box boy boyfriend brain break breakfast breath breathe bright bring broke broken brother brought brown brush build burn burst bus business busy but buy by call calm came can cant car card care carefully carry case cat catch caught cause cell chair chance change chase check cheek chest child children chuckle city class clean clear climb close clothes coffee cold college color come comment complete completely computer concern confuse consider continue control conversation cool corner couch could couldnt counter couple course cover crack crazy cross crowd cry cup cut cute dad damn dance dark date daughter day dead deal dear death decide deep definitely desk did didnt die different dinner direction disappear do doctor does doesnt dog dont done door doubt down drag draw dream dress drink drive drop drove dry during each ear early easily easy eat edge either else empty end enjoy enough enter entire escape especially even evening eventually ever every everyone everything exactly except excite exclaim excuse expect explain expression eye eyebrow face fact fall family far fast father fault favorite fear feel feet fell felt few field fight figure fill finally find fine finger finish fire first fit five fix flash flip floor fly focus follow food foot for force forget form forward found four free friend from front frown fuck full fun funny further game gasp gave gaze gently get giggle girl girlfriend give given glad glance glare glass go god gone gonna good got gotten grab great green greet grey grin grip groan ground group grow guard guess gun guy had hadnt hair half hall hallway hand handle hang happen happy hard has hate have havent he hed hes head hear heard heart heavy held hell hello help her here herself hey hi hide high him himself his hit hold home hope horse hospital hot hour house how however hug huge huh human hundred hung hurry hurt id ill im ive ice idea if ignore imagine immediately important in inside instead interest interrupt into is isnt it its its jacket jeans jerk job join joke jump just keep kept key kick kid kill kind kiss kitchen knee knew knock know known lady land large last late laugh lay lead lean learn least leave led left leg less let letter lie life lift light like line lip listen little live lock locker long look lose lost lot loud love low lunch mad made make man manage many mark marry match matter may maybe me mean meant meet memory men mention met middle might mind mine minute mirror miss mom moment money month mood more morning most mother mouth move movie mr mrs much mum mumble music must mutter my myself name near nearly neck need nervous never new next nice night no nod noise none normal nose not note nothing notice now number obviously of off offer office often oh okay old on once one only onto open or order other our out outside over own pack pain paint pair pants paper parents park part party pass past pause pay people perfect perhaps person phone pick picture piece pink piss place plan play please pocket point police pop position possible power practically present press pretend pretty probably problem promise pull punch push put question quick quickly quiet quietly quite race rain raise ran rang rather reach read ready real realize really reason recognize red relationship relax remain remember remind repeat reply respond rest return ride right ring road rock roll room rose round rub run rush sad safe said same sat save saw say scare school scream search seat second see seem seen self send sense sent serious seriously set settle seven several shadow shake share she shed shes shift shirt shit shock shoe shook shop short shot should shoulder shouldnt shout shove show shower shrug shut sick side sigh sight sign silence silent simply since single sir sister sit situation six skin sky slam sleep slightly slip slow slowly small smell smile smirk smoke snap so soft softly some somehow someone something sometimes somewhere son song soon sorry sort sound space speak spend spent spoke spot stair stand star stare start state stay step stick still stomach stood stop store story straight strange street strong struggle stuck student study stuff stupid such suck sudden suddenly suggest summer sun suppose sure surprise surround sweet table take taken talk tall teacher team tear teeth tell ten than thank that thats the their them themselves then there theres these they theyd theyre thick thing think third this those though thought three threw throat through throw tie tight time tiny tire to today together told tomorrow tone tongue tonight too took top totally touch toward town track trail train tree trip trouble trust truth try turn tv twenty two type uncle under understand until up upon us use usual usually very visit voice wait wake walk wall want warm warn was wasnt watch water wave way we well were weve wear week weird well went were werent wet what whats whatever when where whether which while whisper white who whole why wide wife will wind window wipe wish with within without woke woman women wont wonder wood word wore work world worry worse would wouldnt wow wrap write wrong yeah year yell yes yet you youd youll youre youve young your yourself");

		foreach ($words as $word) {

			//break this word into an array of letters
			$lettersInWord = str_split($word);

			/**
			 * Iterate over each letter in the current word and see how far it is from
			 * the next letter in the word.
			 */
			for ($i=0; $i < count($lettersInWord) - 1; $i++) {

				$currentLetter = $lettersInWord[$i];
				$nextLetter = $lettersInWord[$i + 1];
				$distanceBetweenLetters = abs($alphArray[$nextLetter] - $alphArray[$currentLetter]);

				/**
				 * We need to account for the fact that the alphabet is arranged in a
				 * circular fashion.  This is actually pretty easy to do.  If it takes
				 * 13 or more turns to get from one letter to the next, then we haven't
				 * taken the most efficient route.  For instance, it takes 25 counterclockwise
				 * turns to get from A to Z, but just 1 clockwise turn.  So, 26 minus 25 gives
				 * us the number of required turns: 1.
				 */
				if ($distanceBetweenLetters < round(count($alphArray) / 2)) {
					$this->efficiency += $distanceBetweenLetters;
				}
				else {
					$this->efficiency += count($alphArray) - $distanceBetweenLetters;
				}
			}
		}
	}
}

$scoreToBeat = 99999999;

//Try 1000 random alphabets
for ($i=0; $i < 1000; $i++) {
	$alphabet = new alphabet;
	$alphabet->calculateEfficiency();

	if ($alphabet->efficiency < $scoreToBeat) {
		$winningAlphabet = $alphabet->order;
		$scoreToBeat = $alphabet->efficiency;
	}
}

print "The winner is \"$winningAlphabet\" with a score of $scoreToBeat\n";