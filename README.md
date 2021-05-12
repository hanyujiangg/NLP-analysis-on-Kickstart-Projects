# NLP Analysis on Kickstart Projects 
This project is a proof-of-concept for a NLP approach to increase the chance of building a successful crowdfunding project in platform like Kickstarter. It also draws insights from the crowdfunding landscape that are useful for the platform management and the individual fundraisers. 
This is a school project at Singapore Management University in 2021.
Project team: Dao Yong, Hanyu, Jing Jie, Jocille, Raymond, Soo Yeon

## Data 
We used dataset published by WebRobots and crawled our own data from Kickstarter. 
WebRobots dataset: https://webrobots.io/kickstarter-datasets/

## Data preprocessing
We combined the comments from our self-crawled datasets with the Webrobots dataset through project name. Non-English rows were identified and removed by Langid model. Words are tokenised and coverted to lowercase. Stopword removal, stemming and lemmatization are used when necesary.   

## Solution
We used Latent Dirichlet Allocation and Non-negative matrix factorisation to understand the project topics so that we can help fundraiser come up with better project labelling and help the platform with better project categorisation. 

We used VADER and Senticnet and NLP techniques to conduct sentiment analysis on different types of projects, such as project status, project category etc. 

![Screenshot 2021-05-12 at 5 40 18 PM](https://user-images.githubusercontent.com/35590255/117953939-1fa7b080-b349-11eb-8d66-0ba3002de28d.jpg)

### LDA 
We did a comparison between Gensim's LDA and Mallet LDA models. We concluded that Mallet LDA produces better results. 
We found that 40-50 topics is the optimal number of topics. 
We used pyLDAvis to visualise topic relationships. 
![Screenshot 2021-05-12 at 8 11 01 PM](https://user-images.githubusercontent.com/35590255/117972818-2d1b6580-b35e-11eb-853c-7d4e6db67364.jpg)


### NMF 
We vectorised the TF-IDF based on the tokenised words using sklearn and combined it with the optimal number of topics.  

### Sentiment Analysis 
We compared VADER and Senticnet models for sentiment analysis on our dataset. 
We concluded that VADER is more applicable to the Kickstarter dataset. 
| Model     | Most Positive Comments                                                                                                                                                                                                                                                                                                                                                                                                                                                    | Most Negative Comments                                          |
|-----------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-----------------------------------------------------------------|
| VADER     | Congrats Sam, it is a great idea and I look forward to  watching and if given the chance to participate I'll be there. I'm a truckin biker of the old school I make more time to ride these days as I have been a successful owner-operator in the trucking business. As a cold war vet from '69 to '71 I relish experiencing our great countries history and meeting the folks who hold secrets and stories not readily available to most. Best wishes and best of luck. | 						  F*ck it, why not. But you better hit someone with that stick. |
| SenticNet | Nicely presented Kickstarter - Good Luck! @ jerice50: Thank you very much.                                                                                                                                                                                                                                                                                                                                                                                                | 						  Congratulations on funding!                                   |


### Webapp Demo 
### Step 1: Key in potential project details. 
![Screenshot 2021-05-12 at 8 32 30 PM](https://user-images.githubusercontent.com/35590255/117975353-2d693000-b361-11eb-87f7-d3ca84eb762d.jpg)

### Step 2: Return existing similar projects and project labels. 
![Screenshot 2021-05-12 at 8 33 31 PM](https://user-images.githubusercontent.com/35590255/117975499-51c50c80-b361-11eb-935a-2c3c9ffe0c13.jpg)

### Step 3: View wordclouds for the crowdfunding project landscape and specific category from user input
![Screenshot 2021-05-12 at 8 35 16 PM](https://user-images.githubusercontent.com/35590255/117975728-905ac700-b361-11eb-9132-8acf987a855d.jpg)


## Insights 
### 1. Across all projects, we noticed that the general attitude from commenters are anticipating, encouraging and polite. Shipment and updates on projects concern the investors the most.
![Screenshot 2021-05-12 at 8 37 32 PM](https://user-images.githubusercontent.com/35590255/117976025-e16abb00-b361-11eb-946e-91e1507ecc95.jpg)

### 2. Across all projects, ‘help’ and its associations are used the most frequently. Arts related products such as books, comic books and enamel pins are popular among fundraisers.
![Screenshot 2021-05-12 at 8 38 07 PM](https://user-images.githubusercontent.com/35590255/117976112-f6474e80-b361-11eb-99cb-bc8daed66c3d.jpg)

### 3. It is noticed that for exceptional project description, words related to technology and more specific words such as ‘propulsion’ and ‘space citizen’.

![Screenshot 2021-05-12 at 8 39 42 PM](https://user-images.githubusercontent.com/35590255/117976281-2ee72800-b362-11eb-9869-e9d2a35cdd42.jpg)

This shows by using specific words in project description helps with gaining viewership, instead of simply asking for help.

### 4. The most popular products for the most popular topics are printers with different functionalities and original tarot deck.

![Screenshot 2021-05-12 at 8 40 32 PM](https://user-images.githubusercontent.com/35590255/117976380-4cb48d00-b362-11eb-999e-2b7e62974417.jpg)

Card games such as Tarot and Fictional characters such as Alhazred Abdul are popular. This means that the audience and backers tend to look for products that are not easily found on mainstream markets on Kickstarter. Therefore, prospective project starters or fundraisers should pay more attention to projects that are of original content and in the field of horror/weird fiction and fortune telling.

### 5. Negative comments 
![Screenshot 2021-05-12 at 8 41 33 PM](https://user-images.githubusercontent.com/35590255/117976502-71a90000-b362-11eb-9640-ab5f3fd20a82.jpg)

We noticed that some projects do include negative words in the project description, but it is likely that those words are used for horror fiction and films or to alleviate social issues.


## More Insights to Business Management
### Technology-related projects VS Art or Illustration-related projects 
We found that Technology-related projects received the most comments while art or illustration related projects raised the highest amount of funds. This means that there is an imbalance between the ones who get public attention to those who get the fundings. Therefore, this could mean that although many people are looking forward to advanced technology or technology related projects, most of them are also taken aback by the chances of failure.

### Auto-translation system 
We also noticed that successful projects in Hong Kong and Germany did not receive as much comments as the successful projects in other countries. This could be attributed to the fact that the people in Hong Kong and Germany are non-native English speakers and hence, their project descriptions are not translated to English. Hence, an auto-translation system can be implemented to translate project descriptions of those projects to expose them to non-English speaking countries and vice versa.


