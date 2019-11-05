<html>
<head>
<style>

button.important {
  color: green;
}
</style>
</head>
<body>
<div id="output"></div>

<div>
    <button class= "important" id="prev_button" >Previous</button>
    <button id="next_button" class= "important">Next</button>
</div>
<script>
function vocab(first, last) {
  this.word = first;
  this.meaning = last;
}
var arr = [];
arr[0]= new vocab( "Absolutist","Literally, a government or system of rule that has no restraints on the power exercised. In history, the term refers to a form of monarchical government that was centralised, militarised and repressive."
);
arr[1]= new vocab("Utopian","A vision of a society that is so ideal that it is unlikely to actually exist.") ;
arr[2]= new vocab ("Conservatism","A political philosophy that stressed the importance of tradition, established institutions and customs, and preferred gradual development to quick change."); 
arr[3]= new vocab ("Ideology","System of ideas reflecting a particular social and political vision"); 
arr[4]= new vocab ("Ethnic","Relates to a common racial, tribal, or cultural origin or background that a community identifies with or claims");
arr[5]= new vocab ("Boycott","The refusal to deal and associate with people, or participate in activities, or buy and use things; usually a form of protest."); 
 arr[6]= new vocab ( "Picket","A form of demonstration or protest by which people block the entrance to a shop, factory or office" );   
 arr[7]= new vocab ( "Begar","Labour that villagers were forced to contribute without any payment" );   
 arr[8]= new vocab ( "Dissenter","One who refuses to accept established beliefs and practices." );  
  arr[9]= new vocab ( "Indentured labour","A bonded labourer under contract to work for an employer for a specific amount of time, to pay off his passage to a new country or home." );  
  arr[10]= new vocab ( "Tariff ","Tax imposed on a country’s imports from the rest of the world. Tariffs are levied at the point of entry, i.e., at the border or the airport." );    
  arr[11]= new vocab ( "Exchange rates ","They link national currencies for purposes of international trade. There are broadly two kinds of exchange rates: fixed exchange rate and floating exchange rate. " );  
 arr[12]= new vocab ( "Fixed exchange rates","When exchange rates are fixed and governments intervene to prevent movements in them." );   
 arr[13]= new vocab ( "Flexible or floating exchange rates","These rates fluctuate depending on demand and supply of currencies in foreign exchange markets, in principle without interference by governments." );   
  arr[14]= new vocab ( "Orient","The countries to the east of the Mediterranean, usually referring to Asia. The term arises out of a western viewpoint that sees this region as premodern, traditional and mysterious." );   
 arr[15]= new vocab ( "Proto","Indicating the first or early form of something." );   
 arr[16]= new vocab ( "Stapler","A person who ‘staples’ or sorts wool according to its fibre." );   
 arr[17]= new vocab ( "Fuller","A person who ‘fulls’ – that is, gathers – cloth by pleating." );   
 arr[18]= new vocab ( "Carding","The process in which fibres, such as cotton or wool, are prepared prior to spinning." );   
 arr[19]= new vocab ( "Spinning Jenny","Devised by James Hargreaves in 1764, this machine speeded up the spinning process and reduced labour demand. By turning one single wheel a worker could set in motion a number of spindles and spin several threads at the same time." );   
arr[20]= new vocab ( "Sepoy","This is how the British pronounced the word sipahi, meaning an Indian soldier in the service of the British." );   
arr[21]= new vocab ( "Fly shuttle","It is a mechanical device used for weaving, moved by means of ropes and pullies. It places the horizontal threads ( called the weft) into the verticle threads (called the warp). The invention of the fly shuttle made it possible for weavers to operate large looms and weave wide pieces of cloth." );   
arr[22]= new vocab (  "Calligraphy","The art of beautiful and stylised writing." );   
 arr[23]= new vocab (  "Vellum","A parchment made from the skin of animals." );   
 arr[24]= new vocab ( "Platen","In letterpress printing, platen is a board which is pressed onto the back of the paper to get the impression from the type. At one time it used to be a wooden board; later it was made of steel." );   
 arr[25]= new vocab ( "Compositor","The person who composes the text for printing" );  
 arr[26]= new vocab ( "Ballad","A historical account or folk tale in verse, usually sung or recited."  );  
 arr[27]= new vocab ( "Taverns","Places where people gathered to drink alcohol, to be served food, and to meet friends and exchange news." );   
  arr[28]= new vocab ( "Protestant Reformation","A sixteenth-century movement to reform the Catholic Church dominated by Rome. Martin Luther was one of the main Protestant reformers. Several traditions of anti-Catholic Christianity developed out of the movement."  );  
arr[29]= new vocab (  "Inquisition","A former Roman Catholic court for identifying and punishing heretics." );  
 arr[30]= new vocab ( "Heretical","Beliefs which do not follow the accepted teachings of the Church. In medieval times, heresy was seen as a threat to the right of the Church to decide on what should be believed and what should not. Heretical beliefs were severely punished." );   
 arr[31]= new vocab ( "Satiety","The state of being fulfilled much beyond the point of satisfaction" );  
arr[32]= new vocab ( "Seditious","Action, speech or writing that is seen as opposing the government" );  
arr[33]= new vocab ( "Inquisition","A former Roman Catholic court for identifying and punishing heretics." );   
arr[34]= new vocab ( "Heretical","Beliefs which do not follow the accepted teachings of the Church. In medieval times, heresy was seen as a threat to the right of the Church to decide on what should be believed and what should not. Heretical beliefs were severely punished." );   
 arr[35]= new vocab ( "Denominations","Sub groups within a religion" );   
 arr[36]= new vocab ( "Almanac","An annual publication giving astronomical data, information about the movements of the sun and moon, timing of full tides and eclipses, and much else that was of importance in the everyday life of people." );   
 arr[37]= new vocab ( "Chapbook","A term used to describe pocketsize books that are sold by travelling pedlars called chapmen. These became popular from the time of the sixteenth-century print revolution." );   
 arr[38]= new vocab ( "Ulama","Legal scholars of Islam and the sharia ( a body of Islamic law)" ); 
arr[39]= new vocab ( "Fatwa","A legal pronouncement on Islamic law usually given by a mufti (legal scholar) to clarify issues on which the law is uncertain." )  
 arr[40]= new vocab ( "Collateral","It is an asset that the borrower owns (such as land, building, vehicle, livestocks, deposits with banks) and uses this as a guarantee to a lender until the loan is repaid."  )  
 arr[41]= new vocab ( "Globalisation","It is this process of rapid integration or interconnection between countries. " ) 
 arr[42]= new vocab ( "Enlightenment","An 18th century movement in Europe that laid emphasis on the reason and science over religion and tradition.")
 arr[43]= new vocab ( "Charter","A document that describes the basic laws or principles of a group.")
 arr[44]= new vocab ( "Sovereign","People have supreme right to make decisions on internal as well as external matters." )
 arr[45]= new vocab ( "Despotism","A form of government in which a single individual rules with absolute power. ")
arr[46]= new vocab ( "Outbreak","A sudden occurrence of something." );
arr[47]= new vocab ( " Majoritarianism","A belief that the majority community should be able to rule a country in whichever way it wants, by disregarding the wishes and needs of the minority. ");   
 arr[48]= new vocab ( " Jurisdiction "," The area over which someone has legal authority. The area may be defined in terms of geographical boundaries or in terms of certain kinds of subjects"); 
arr[49]= new vocab ( "Coalition government "," A government formed by the coming together of at least two political parties. Usually partners in a coalition form a political alliance and adopt a common programme. ");    
arr[50]= new vocab (" Sexual division of labour "," A system in which all work inside the home is either done by the women of the family, or organised by them through the domestic helpers.");   
arr[51]= new vocab ( "  Feminist "," A woman or a man who believes in equal rights and opportunities for women and men.  ");   
 arr[52]= new vocab ( " Patriarchy "," Literally, rule by father, this concept is used to refer to a system that values men more and gives them power over women. ");    
 arr[53]= new vocab ( " Family laws "," Those laws that deal with family related matters such as marriage, divorce, adoption, inheritance, etc. In our country, different family laws apply to followers of different religions. ");    
 arr[54]= new vocab ( " Urbanisation "," Shift of population from rural areas to urban areas.  ");   
 arr[55]= new vocab ( " Occupational mobility "," Shift from one occupation to another, usually when a new generation takes up occupations other than those practiced by their ancestors.  ");   
arr[56]= new vocab ( " Caste hierarchy "," A ladder like formation in which all the caste groups are placed from the ‘highest’ to the ‘lowest’ castes.  ");   
 arr[57]= new vocab ( " Partisan "," A person who is strongly committed to a party,     group or faction. Partisanship is marked by a tendency to take a side and inability to take a balanced view on an issue.  ");   
 arr[58]= new vocab ( " Ruling Party "," Political party that runs government. ");    
 arr[59]= new vocab ( " Defection "," Changing party allegiance from the party on which a person got elected (to a legislative body) to a different party ");
 arr[60]= new vocab ( "  Galley  "," Metal frame in which types are laid and the text composed. ");  
 arr[61]= new vocab ( "  Nationalism ","  loyalty and devotion to a nation ");   
 arr[62]= new vocab ( "  Code ","  A set of rules and regulations.   ");  
 arr[63]= new vocab ( "  Serf "," an agricultural labourer bound by the feudal system who was tied to working on his lord's estate. ");  
 arr[64]= new vocab ( "  Manor ","  A large estate. ");  
 arr[65]= new vocab ( "  Guild "," A medieval association of merchants or craftsmen  ");  
 arr[66]= new vocab ( "  Harbinger "," Something that shows what is coming. ");  
 arr[67]= new vocab ( "  Censorship ","  A system of examining and removing things that are considered to be offensive, immoral and harmful to the society. ");  
 arr[68]= new vocab ( "  Conscription ","  The practice of compulsory enrollment of persons for military service. ");  
 arr[69]= new vocab ( "  Outweigh ","  to exceed in weight, value, or importance. ");  
 arr[70]= new vocab ( "  Autonomous "," having the right or power of self-government. ");  
 arr[71]= new vocab ( "  Allegiance "," Loyalty ");  
 arr[72]= new vocab ( "  Conservativism ","  commitment to traditional values and ideas with opposition to change or innovation. ");  
 arr[73]= new vocab ( "  Diplomacy "," The practice of conducting negotiations between nations. ");  
 arr[74]= new vocab ( "  Tariff "," A tax on goods coming in or out of a country. ");  
 arr[75]= new vocab ( "  Capitulate ","  To surrender ");  
 arr[76]= new vocab ( "  Vibrant ","   full of energy and life.  ");  
 arr[77]= new vocab ( "  Decimate ","  To destroy a large number of animals or plants.  ");   
 arr[78]= new vocab ( "  Thrive "," To flourish. ");  
 arr[79]= new vocab ( "  Pave ","   To cover an area of ground with a hard, flatsurface of pieces of stone, concrete, or bricks. ");  
 arr[80]= new vocab ( "  Profound ","  Very deep ");  
 arr[81]= new vocab ( "  Dweller ","  Resident ");  
 arr[82]= new vocab ( "  Debt ","  a sum of money that is owed or due.  ");  
 arr[83]= new vocab ( "  Consent ","  Permission ");  
 arr[84]= new vocab ( "  Autocracy ","   a system of government by one person with absolute power. ");  
 arr[85]= new vocab ( "  Suffrage "," The right to vote. ");  
 arr[86]= new vocab ( "  Devastate ","  To destroy ");  
 arr[87]= new vocab ( "  Desperation ","  A strong feeling of sadness. fear and hopelessness. ");  
 arr[88]= new vocab ( "  Slump ","  a sudden and severe fall in the price, value, or amount of something. ");  
 arr[89]= new vocab ( "  Plunge ","   Jump or dive quickly and energetically. ");  
 arr[90]= new vocab ( "  Treaty ","  a formally signed agreement between states. ");  
 arr[91]= new vocab ( "  Subdue "," To conquer. ");  
 arr[92]= new vocab ( "  Multilateral ","  involving more than two nations or parties. ");  
 arr[93]= new vocab ( "  Plunge ","  To dip suddenly. ");  
 arr[94]= new vocab ( "  Catastrophic "," A terrible disaster. ");  
 arr[95]= new vocab ( "  Harness ","  To use something for a particular purpose. ");  
 arr[96]= new vocab ( "  Maim ","  To injure or disable someone very badly. ");  
 arr[97]= new vocab ( "  Snapping "," the action of breaking suddenly and completely  ");  
 arr[98]= new vocab ( "  Bloated ","  excessive in size or amount.  ");  
 arr[99]= new vocab ( "  Dramatically "," Suddenly ");  
 arr[100]= new vocab ( "  Glut ","  an excessively abundant supply of something. ");  
 arr[101]= new vocab ( "  Slaughterhouse ","  A place where the animals are killed for their meat. ");  
 arr[102]= new vocab ( "  Slump ","  a sudden and severe fall in the price, value, or amount of something. ");  
 arr[103]= new vocab ( "  Rot "," To decay slowly. ");  
 arr[104]= new vocab ( "  Consumerist "," a person who is preoccupied with the acquisition of consumer goods. ");  
 arr[105]= new vocab ( "  Puff ","  a short, explosive burst of breath or wind. ");  
  arr[106]= new vocab ( "  Steady "," Fixed ");  
 arr[107]= new vocab ( "  Pilgrimage ","  A journey, especially a long one, made to some sacred place as an act of religious devotion.  ");  
 arr[108]= new vocab ( "  Knit "," to link firmly or closely. ");  
 arr[109]= new vocab ( "  Commence ","  To start. ");  
 arr[110]= new vocab ( "  Tremble "," shake involuntarily as a result of anxiety, excitement, or frailty.  ");  
  


 var i = 0;

function nextItem() {
    i = i + 1; // increase i by one
    i = i % arr.length; // if we've gone too high, start from `0` again
    return "Word: "+ arr[i].word +"<br>"+ "Meaning: "+ arr[i].meaning; 
}

function prevItem() {
    if (i === 0) { // i would become 0
        i = arr.length; // so put it at the other end of the array
    }
    i = i - 1; // decrease by one
    return "Word: "+ arr[i].word +"<br>"+ "Meaning: "+ arr[i].meaning; 
}

window.addEventListener('load', function () {
    document.getElementById('output').textContent = arr[0]; // initial value
    document.getElementById('prev_button').addEventListener(
        'click', // we want to listen for a click
        function (e) { // the e here is the event itself
            document.getElementById('output').innerHTML= prevItem();
        }
    );
    
    document.getElementById('next_button').addEventListener(
        'click', // we want to listen for a click
        function (e) { // the e here is the event itself
            document.getElementById('output').innerHTML = nextItem();
        }
    );
});
</script>
</body>
</html>