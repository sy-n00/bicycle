# 서울 자전거 따릉이 현황

2020-2 성신여자대학교 데이터베이스 프로그래밍 수업 팀1(t1) 기말과제<br><br>

## 홈페이지 링크
<a href="http://ec2-13-209-66-31.ap-northeast-2.compute.amazonaws.com/index.php">서울 자전거 따릉이</a>


## 제작 동기
 서울시 교통 홈페이지에 따르면 따릉이의 사용량은 해가 갈수록 증가하고 있으며, 개방된 야외에서 사회적 거리두기를 실천하면서 개인 단위로 사용이 가능하다는 점에서 전세계적으로 코로나19가 대유행하고 있는 현재, 수요량이 점점 증가하는 추세이다. 아래 첨부한 기사에 의하면 특히 출퇴근 시간에 이용량이 급증하였다고 한다.
<br><br> 그러나 각 대여소 별 자전거는 한정되어있고 특정 시간대에 특정 대여소에 자전거가 몰려서 사용자가 자전거를 이용하려고 해도 이용이 어려운 경우가 있다. 특히 출퇴근 시간대가 자전거 몰림 현상이 심한데, 출근 시간대에는 주택가 근처 대여소는 자전거가 부족하고 지하철 역 근처 대여소에 자전거가 몰려있고, 퇴근 시간대에는 그 반대여서 따릉이 사용자는 따릉이를 이용하지 못하고 헛걸음하기 쉽다. 
<br><br> 따라서 우리는 따릉이 사용자가 각 대여소의 시간대별 평균적인 자전거 보유 상태를 확인할 수 있게하고, 자전거가 없는 경우 근처 가까운 대여소를 추천하여, 따릉이 사용자들이 이용을 원하는 시간에 원하는 곳에서 따릉이를 이용할 수 있는 확률(가용성)을 높이는 서비스를 제작하였다. 또한, 따릉이에 관한 정보를 한 눈에 볼 수 있도록 하여 시민들의 따릉이에 관한 정보를 쉽게 이해하고, 따릉이에 대한 관심을 증가시킬 수 있도록 한다.
<br><br>(참고자료 - https://news.seoul.go.kr/traffic/archives/503031) 


## 목표
- 사용자가 입력한 구의 자전거 포화, 부족 대여소를 확인하여 사용자는 본인이 이용하는 대여소가 평균적으로 어떤 상태인지 확인이 가능. <br>
- 각 구의 따릉이 대여, 반납량을 시각화하여 시민들이 따릉이 이용량을 한 눈에 확인할 수 있도록 함.<br>
- 시간대 별 따릉이 대여소의 자전거 포화, 부족 상태를 표시하여 따릉이 사용자들이 원하는 시간대에
이용을 원하는 대여소가 평균적으로 자전거가 남아있는지 확인할 수 있게 하여 자전거가 없어 다른 대여소를 찾아가는 헛걸음을 하지 않도록 하고, 따릉이 사업 종사자(따릉이 배치 및 관리 담당자)에게는 각 대여소의 평균 이용량을 파악할 수 있게 하여 자전거 배치에 도움을 줄 수 있도록 함. <br>
- 자전거가 선택한 시간대에 평균적으로 부족 상태일 경우 주변 대여소 목록을 표시하여 사용자가 근처 다른 정류소에서 자전거를 대여할 수 있도록 함. 

## 제공 기능
- 각 구의 대여 반납 이용량을 시각화한 그래프 확인(한 달 기준)
- 각 구별 자전거 포화 대여소 확인
- 각 구별 자전거 부족 대여소 확인
- 입력한 자전거 대여소의 자전거 대수 포화/부족 상태 확인
- 입력한 자전거 대여소와 1km이내 범위의 가장 가까운 순으로 대여소 추천

## 각 페이지 별 소개 및 이용방법
### 1. Index 페이지 
   - 자전거 포화/부족 확인 화면 연결
   - 원하는 대여소와 시간 상태 확인 화면 연결 
<img width="600" src="https://user-images.githubusercontent.com/53183320/102006605-a38f4980-3d65-11eb-84a3-92739e018e69.PNG">


### 2. 자전거 포화/부족 상태 확인과 구별 대여, 반납 비교 그래프
   - 전체 대여소의 자전거 포화/부족 상태 확인
   - 구를 입력하면 원하는 구의 포화/부족 상태 확인 가능
   
   ### 2-1. 포화 상태 확인
   <img width="600" alt="exceed" src="https://user-images.githubusercontent.com/53183320/102006609-a853fd80-3d65-11eb-8abf-97724b7d873b.PNG">
   <img width="600" alt="exceed_gu" src="https://user-images.githubusercontent.com/53183320/102006615-ab4eee00-3d65-11eb-871b-3a9420f87803.PNG">
   <img width="600" alt="shortage" src="https://user-images.githubusercontent.com/70560199/101938977-a6842000-3c27-11eb-8f06-b9c5e642f370.PNG">
   <img width="600" alt="shortage_gu" src="https://user-images.githubusercontent.com/70560199/101938982-a8e67a00-3c27-11eb-87f0-750da8c2e731.PNG">
   
   - 각 구별로 자전거 대여, 반납 개수를 한 눈에 쉽게 비교하기 위하여 막대 그래프로 표현
   <img width="767" alt="graph" src="https://user-images.githubusercontent.com/70560199/101939041-c0bdfe00-3c27-11eb-80a0-fa05a8415464.PNG">


### 3. 시간대별 대여소의 자전거 포화, 부족 상태 확인 및 가까운 대여소 추천 페이지 
   - 원하는 시간대를 한 시간 단위로 선택
  <img width="400" src="https://user-images.githubusercontent.com/70579136/101970733-9001b700-3c6f-11eb-8b3f-eea86e83c224.png">
  
   - 원하는 대여소의 대여소 번호를 입력
   <img width="400" src="https://user-images.githubusercontent.com/70579136/101970441-ba527500-3c6d-11eb-843a-e257ce613e30.PNG">
   
   - 모든 항목을 입력하고 go 버튼을 클릭
   <img width="580" src="https://user-images.githubusercontent.com/70579136/101970464-e79f2300-3c6d-11eb-8dcf-7a1a6048d171.PNG">
   1) 선택한 시간대 확인<br>
   2) 입력한 대여소의 대여소 명 확인<br>
   3) 입력한 대여소의 자전거 포화, 부족 상태 확인<br>
   4) 입력한 대여소와 일정 거리 내에 있는 대여소가 가장 가까운 곳부터 출력<br>
   5) 클릭 시 index.php 페이지로 이동
   
##### 예외처리
   - 대여소번호 입력 안하면 오류메시지 출력
<img width="200" src="https://user-images.githubusercontent.com/70579136/101985840-bd7d4d80-3ccd-11eb-9234-8c08d429ac53.PNG">
   
   - 대여소 번호에 숫자외의 값이 들어가면 오류메시지 출력 (순서대로 한글, 영어, 기호 입력 시 화면)

<img width="200" src="https://user-images.githubusercontent.com/70579136/101985854-cbcb6980-3ccd-11eb-82c8-f2506a16e0a6.PNG"><img width="200" src="https://user-images.githubusercontent.com/70579136/101985856-d1c14a80-3ccd-11eb-9152-3938b25a9e58.PNG"><img width="200" src="https://user-images.githubusercontent.com/70579136/101985855-d0901d80-3ccd-11eb-99be-313514a53ed6.PNG"> 
   
   - 시간대 선택 안하면 오류메시지 출력
<img width="200" src="https://user-images.githubusercontent.com/70579136/101985844-c110d480-3ccd-11eb-820f-abc8f541db10.PNG">   
   
   - 없는 대여소번호를 입력하거나 대여기록이 없는 대여소번호 입력 시 오류페이지로 이동
<img width="500" src="https://user-images.githubusercontent.com/70579136/101985858-d554d180-3ccd-11eb-91a3-6dd723c77352.PNG">

   

## 구축 환경
서버 : Ubuntu Server 20.04 LTS (HVM) - AWS EC2
<br>데이터베이스 : mariaDB
<br>

## 사용 데이터 및 출처
서울특별시에서 제공하는 '서울 열린데이터 광장' 사이트를 이용.

- 서울특별시 공공자전거 대여이력 정보 (2020년 5월 데이터)
<br>https://data.seoul.go.kr/dataList/OA-15182/F/1/datasetView.do
- 공공자전거 대여소별 이용정보 - 대여소별 대여,납 정보 (월별, 2020년 5월 데이터) 
<br>https://data.seoul.go.kr/dataList/OA-15249/F/1/datasetView.do
- 공공자전거 대여소 정보
<br>https://data.seoul.go.kr/dataList/OA-13252/F/1/datasetView.do

## 역할분담
