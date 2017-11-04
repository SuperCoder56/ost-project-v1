#/bin/sh



if [ -f $1 ]
then 
echo "File exists";
ls -l $1
else
echo "File not exists";
fi


