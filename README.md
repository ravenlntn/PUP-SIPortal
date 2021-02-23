# PUP-SIPortal

PUP-SIPortal provides students information for our professors and class presidents, it is a beta system for our final exam in Web Programming by using PHP DataBase. It is built specially for the professors who are having a hard time searching for students data through their files or messaging the class president. This system works in two ways: 

1. The ADMIN Server: This provides either the class president or assigned admin for the students information by updating, creating, and deleting. 
2. The CLIENT Server: This provides for the professor or any user to only view the students' data for convenient purposes. 

**This system still lacks of content and need room for further improvements.**



### INSTRUCTIONs

```
CREATE DATABASE NAME = 'pupsiportal'
```

```
FOR TABLE IMPORT THE FILE INFORMATION.SQL 
```

#### FOR ADMIN-BASED: ENTER http://localhost/pup%20SIPortal/login.php
```
 USERNAME : admin == EMAIL : admin@pup.edu.ph == PASSWORD : 123456 
```

#### FOR CLIENT-BASED: ENTER http://localhost/PUP%20SIPortal/index.php


## Building from Source 🏗️
1. **Fork the repository**

- Then GO TO YOUR repository and find PUP-SIPortal

2. **Clone the repository**

```bash
git clone https://github.com/YOUR_USERNAME/PUP-SIPortal
```

## Push your code 
1. 

```bash
git add .
```

2. 

```bash
git commit -m "Describe mo kung ano ginawa mo"
```

2. 

```bash
git push -u origin main
```

3. Go to YOUR PUP-SIPortal repository

4. Click pull request
![pull request](https://github.com/glendell03/talaarawan/blob/main/pull-request.png)

5. Create Pull request


## Sync your fork with the original Git repo
- If you list the configured remote repository you will only see your fork as origin:
```
git remote -v
origin  https://github.com/YOUR_USERNAME/YOUR_FORK.git (fetch)
origin  https://github.com/YOUR_USERNAME/YOUR_FORK.git (push)
```
1. **Add a new remote upstream repository**
```
git remote add upstream https://github.com/ravenlntn/PUP-SIPortal
```
- You can now see both the original repository and the fork
```
git remote -v
origin    https://github.com/YOUR_USERNAME/YOUR_FORK.git (fetch)
origin    https://github.com/YOUR_USERNAME/YOUR_FORK.git (push)
upstream  https://github.com/ORIGINAL_OWNER/ORIGINAL_REPOSITORY.git (fetch)
upstream  https://github.com/ORIGINAL_OWNER/ORIGINAL_REPOSITORY.git (push)
```
2. **Sync your fork**
- Be sure your in the root of your project and also in the main branch
```
git checkout main
Switched to branch 'main'
```
- Now you have to fetch the changes from the original repo
```
git fetch upstream
```
- And merge the changes in your main branch
```
git merge upstream/main
```
